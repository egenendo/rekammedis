	<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../">Home</a>
        </li>
        <li class="breadcrumb-item active">Data Pasien</li>
      </ol>
	  <a href='index?p=tambah_pasien' class="btn btn-sm btn-primary" style="width: 100%;">Tambah</a><br><br>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tabel Data Pasien</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
				  <th>Alamat</th>
				  <th>Pengaturan</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
				  <th>Alamat</th>
				  <th>Pengaturan</th>
                </tr>
              </tfoot>
              <tbody>
			  <?php
				$no = 1;				
				$queryy = "select * from tb_pasien order by id_p desc";
				$sqll = mysql_query($queryy) or die(mysql_error());
				while($data = mysql_fetch_array($sqll)){ 
				$id_p = $data['id_p'];
				$nama_p = $data['nama_p'];
				$alamat_p = $data['alamat_p'];
			  ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><a href='index?p=detail_pasien&id=<?php echo $id_p;?>'><?php echo $nama_p; ?></a></td>
				  <td><?php echo $alamat_p; ?></td>
                  <td><center>
				  <?php
				  $cek_periksa = mysql_query("select * from tb_pemeriksaan where id_p_pks='$id_p' and status_pks=0");
				  $cek_periksaa = mysql_num_rows($cek_periksa);			  
				  
				  if($cek_periksaa > 0){  
				  ?>
				  
				  <?php
				  }
				  if($cek_periksaa == 0){  
				  ?>
				  <a href='index?p=tambah_periksa&id=<?php echo $id_p;?>' class="btn btn-sm btn-warning">Periksa</a>
				  <?php
				  }
				  ?>
				  <a href='index?p=ubah_pasien&id=<?php echo $id_p;?>' class="btn btn-sm btn-success">Ubah</a> 
				  <a href='index?p=hapus_pasien&id=<?php echo $id_p;?>' onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Pasien <?php echo $nama_p;?> ?');" class="btn btn-sm btn-danger">Hapus</a>
				  </center></td>
                </tr>
			  <?php
				$no++; }
			  ?>	
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->