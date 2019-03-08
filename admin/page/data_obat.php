	<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../">Home</a>
        </li>
        <li class="breadcrumb-item active">Data Obat</li>
      </ol>
	  <a href='index?p=tambah_obat' class="btn btn-sm btn-primary" style="width: 100%;">Tambah</a><br><br>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tabel Data Obat</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
				  <th>Harga</th>
				  <th>Pengaturan</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
				  <th>Harga</th>
				  <th>Pengaturan</th>
                </tr>
              </tfoot>
              <tbody>
			  <?php
				$no = 1;				
				$queryy = "select * from tb_obat order by id_o desc";
				$sqll = mysql_query($queryy) or die(mysql_error());
				while($data = mysql_fetch_array($sqll)){ 
				$id_o = $data['id_o'];
				$nama_o = $data['nama_o'];
				$harga_o = $data['harga_o'];
			  ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $nama_o; ?></td>
				  <td><?php echo $harga_o; ?></td>
                  <td><center>
				  <a href='index?p=ubah_obat&id=<?php echo $id_o;?>' class="btn btn-sm btn-success">Ubah</a> 
				  <a href='index?p=hapus_obat&id=<?php echo $id_o;?>' onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Obat <?php echo $nama_o;?> ?');" class="btn btn-sm btn-danger">Hapus</a>
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