					<?php
					if(empty($_GET['id'])){
					include '404.php';
					} else {
					?>
					
					<?php
					$id = $_GET['id'];
                    $query = mysql_query("SELECT * FROM tb_karyawan, tb_jabatan_karyawan, tb_bagian_karyawan WHERE
										 tb_karyawan.id_level_k=tb_jabatan_karyawan.id_jk AND
										 tb_karyawan.id_bagian_k=tb_bagian_karyawan.id_bk AND
										 username_k='$id'");
                    $data  = mysql_fetch_array($query);
					$nama_k = $data['nama_k'];
					$username_k = $data['username_k'];
					$password_k = $data['password_k'];
					$level_jk = $data['level_jk'];
					$nama_bk = $data['nama_bk'];
					$admin_input_k = $data['admin_input_k'];
					$tanggal_input_k = $data['tanggal_input_k'];
					$tanggal_input_kk = $hari[date("w", strtotime($tanggal_input_k))].", ".date("j", strtotime($tanggal_input_k))." ".$bulan[date("n", strtotime($tanggal_input_k))]." ".date("Y", strtotime($tanggal_input_k));						                  			
					$jam_input_k = $data['jam_input_k'];
					
					$queryy = mysql_query("SELECT * FROM tb_karyawan WHERE
										 username_k='$admin_input_k'");
                    $dataa  = mysql_fetch_array($queryy);
					$nama_kk = $dataa['nama_k'];
					
					if($username_k == $id){					
                    ?>

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../">Home</a>
        </li>
        <li class="breadcrumb-item active">Detail Karyawan</li>
      </ol>
					
		  <hr>
          <div class="form-group">
            <label>Nama =</label>
            <font style="color: #007bff;"><?php echo $nama_k; ?></font>
          </div>
		  <hr>
          <div class="form-group">
            <label>Username =</label>
            <font style="color: #007bff;"><?php echo $username_k; ?></font>
          </div>
		  <hr>
		  <div class="form-group">
            <label>Password =</label>
            <font style="color: #007bff;"><?php echo $password_k; ?></font>
          </div>
		  <hr>
		  <div class="form-group">
            <label>Jabatan =</label>
            <font style="color: #007bff;"><?php echo $level_jk; ?></font>
          </div>
		  <hr>
		  <div class="form-group">
            <label>Bagian =</label>
            <font style="color: #007bff;"><?php echo $nama_bk; ?></font>
          </div>
		  <hr>
		  <div class="form-group">
            <label>Ditambahkan Oleh =</label>
            <font style="color: #007bff;"><?php echo $nama_kk; ?></font>
          </div>
		  <hr>
		  <div class="form-group">
            <label>Ditambahkan Pada =</label>
            <font style="color: #007bff;"><?php echo $tanggal_input_kk; ?> ( <?php echo $jam_input_k; ?> )</font>
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