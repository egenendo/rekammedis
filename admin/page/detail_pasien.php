					<?php
					if(empty($_GET['id'])){
					include '404.php';
					} else {
					?>
					
					<?php
					$id = $_GET['id'];
                    $query = mysql_query("SELECT * FROM tb_pasien, tb_jenis_kelamin WHERE
										 tb_pasien.id_jkl_p=tb_jenis_kelamin.id_jkl AND
										 id_p='$id'");
                    $data  = mysql_fetch_array($query);
					$id_p = $data['id_p'];
					$nama_p = $data['nama_p'];
					$nama_jkl = $data['nama_jkl'];
					$tempat_lahir_p = $data['tempat_lahir_p'];
					$tanggal_lahir_p = $data['tanggal_lahir_p'];
					$tanggal_lahir_pp = $hari[date("w", strtotime($tanggal_lahir_p))].", ".date("j", strtotime($tanggal_lahir_p))." ".$bulan[date("n", strtotime($tanggal_lahir_p))]." ".date("Y", strtotime($tanggal_lahir_p));						                  								
					$tanggal_sekarang = date('Y-m-d');
					$umur_p = $tanggal_sekarang-$tanggal_lahir_p;
					$alamat_p = $data['alamat_p'];
					$admin_input_p = $data['admin_input_p'];
					$tanggal_input_p = $data['tanggal_input_p'];
					$tanggal_input_pp = $hari[date("w", strtotime($tanggal_input_p))].", ".date("j", strtotime($tanggal_input_p))." ".$bulan[date("n", strtotime($tanggal_input_p))]." ".date("Y", strtotime($tanggal_input_p));						                  			
					$jam_input_p = $data['jam_input_p'];
					
					$queryy = mysql_query("SELECT * FROM tb_karyawan WHERE
										 username_k='$admin_input_p'");
                    $dataa  = mysql_fetch_array($queryy);
					$nama_kk = $dataa['nama_k'];
					
					if($id_p == $id){					
                    ?>

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../">Home</a>
        </li>
        <li class="breadcrumb-item active">Detail Pasien</li>
      </ol>
					
		  <hr>
          <div class="form-group">
            <label>Nama =</label>
            <font style="color: #007bff;"><?php echo $nama_p; ?></font>
          </div>
		  <hr>
          <div class="form-group">
            <label>Jenis Kelamin =</label>
            <font style="color: #007bff;"><?php echo $nama_jkl; ?></font>
          </div>
		  <hr>
		  <div class="form-group">
            <label>Tempat Lahir =</label>
            <font style="color: #007bff;"><?php echo $tempat_lahir_p; ?></font>
          </div>
		  <hr>
		  <div class="form-group">
            <label>Tanggal Lahir =</label>
            <font style="color: #007bff;"><?php echo $tanggal_lahir_pp; ?></font>
          </div>
		  <hr>
		  <div class="form-group">
            <label>Umur =</label>
            <font style="color: #007bff;"><?php echo $umur_p; ?> Tahun</font>
          </div>
		  <hr>
		  <div class="form-group">
            <label>Alamat =</label>
            <font style="color: #007bff;"><?php echo $alamat_p; ?></font>
          </div>
		  <hr>
		  <div class="form-group">
            <label>Ditambahkan Oleh =</label>
            <font style="color: #007bff;"><?php echo $nama_kk; ?></font>
          </div>
		  <hr>
		  <div class="form-group">
            <label>Ditambahkan Pada =</label>
            <font style="color: #007bff;"><?php echo $tanggal_input_pp; ?> ( <?php echo $jam_input_p; ?> )</font>
          </div>
		  <hr>
		<br>
		
</div>

			<?php
			} else {
			include "404.php";
			}
			?>
			
			<?php
			}
			?>	