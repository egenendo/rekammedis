					<?php
					if(empty($_GET['id'])){
					include '404.php';
					} else {
					?>
					
					<?php
					$id = $_GET['id'];
                    $query = mysql_query("SELECT * FROM tb_karyawan WHERE 
										 username_k='$id'");
                    $data  = mysql_fetch_array($query);
					$nama_k = $data['nama_k'];
					$username_k = $data['username_k'];
					$password_k = $data['password_k'];
					
					if($username_k == $id){					
                    ?>

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../">Home</a>
        </li>
        <li class="breadcrumb-item active">Ubah Karyawan</li>
      </ol>
					
		<form method='post' role="form">
          <div class="form-group">
            <label>Nama</label>
            <input class="form-control" type='text' name="nama_k" id="nama_k" value='<?php echo $nama_k; ?>' autofocus required autocomplete='off'>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input class="form-control" type='text' name="username_k" id="username_k" value='<?php echo $username_k; ?>' required autocomplete='off' readonly>
          </div>
		  <div class="form-group">
            <label>Password</label>
            <input class="form-control" type='text' name="password_k" id="password_k" value='<?php echo $password_k; ?>' required autocomplete='off'>
          </div>
		  <div class='form-group'>
			<label>Jabatan</label>
			<select class='form-control' name='id_level_k' id='id_level_k' data-search='true' required='yes' autocomplete='off'>
				<?php  
				$sql1 = "select * from tb_karyawan,tb_jabatan_karyawan where tb_karyawan.id_level_k=tb_jabatan_karyawan.id_jk and username_k='$id'";
				$result1 = mysql_query($sql1);
				while($data1 = mysql_fetch_array($result1)){
					$id_level_k1 = $data1['id_level_k'];
					$level_jk1 = $data1['level_jk'];
				?>
			<option value='<?php echo $id_level_k1; ?>' hidden='true'><?php echo $level_jk1; ?></option>
				<?php
				}
				?>
				<?php  
				$sql2 = 'select * from tb_jabatan_karyawan order by id_jk ASC';
				$result2 = mysql_query($sql2);
				while($data2 = mysql_fetch_array($result2)){
					$id_jk2 = $data2['id_jk'];
					$level_jk2 = $data2['level_jk'];
				?>
			<option value='<?php echo $id_jk2; ?>'><?php echo $level_jk2; ?></option>
				<?php
				}
				?>
			</select>
		  </div>
          <div class='form-group'>
			<label>Bagian</label>
			<select class='form-control' name='id_bagian_k' id='id_bagian_k' data-search='true' required='yes' autocomplete='off'>
				<?php  
				$sql1 = "select * from tb_karyawan,tb_bagian_karyawan where tb_karyawan.id_bagian_k=tb_bagian_karyawan.id_bk and username_k='$id'";
				$result1 = mysql_query($sql1);
				while($data1 = mysql_fetch_array($result1)){
					$id_bagian_k1 = $data1['id_bagian_k'];
					$nama_bk1 = $data1['nama_bk'];
				?>
			<option value='<?php echo $id_bagian_k1; ?>' hidden='true'><?php echo $nama_bk1; ?></option>
				<?php
				}
				?>
				<?php  
				$sql2 = 'select * from tb_bagian_karyawan order by id_bk ASC';
				$result2 = mysql_query($sql2);
				while($data2 = mysql_fetch_array($result2)){
					$id_bk2 = $data2['id_bk'];
					$nama_bk2 = $data2['nama_bk'];
				?>
			<option value='<?php echo $id_bk2; ?>'><?php echo $nama_bk2; ?></option>
				<?php
				}
				?>
			</select>
		  </div>			  
          <center><button type="submit" name="ubah_karyawan" class="btn btn-sm btn-success">Ubah</button>
          <button type="reset" class="btn btn-sm btn-danger">Batal</button></center>
        </form>
		<br>
		
</div>
			
	<?php
	include 'control_karyawan.php';
	?>

			<?php
			} else {
			include "404.php";
			}
			?>
			
			<?php
			}
			?>	