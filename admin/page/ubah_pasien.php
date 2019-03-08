					<?php
					if(empty($_GET['id'])){
					include '404.php';
					} else {
					?>
					
					<?php
					$id = $_GET['id'];
                    $query = mysql_query("SELECT * FROM tb_pasien WHERE 
										 id_p='$id'");
                    $data  = mysql_fetch_array($query);
					$id_p = $data['id_p'];
					$nama_p = $data['nama_p'];
					$tempat_lahir_p = $data['tempat_lahir_p'];
					$tanggal_lahir_p = $data['tanggal_lahir_p'];
					$alamat_p = $data['alamat_p'];
					
					if($id_p == $id){					
                    ?>

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../">Home</a>
        </li>
        <li class="breadcrumb-item active">Ubah Pasien</li>
      </ol>
					
		<form method='post' role="form">
          <div class="form-group">
            <label>Nama</label>
            <input class="form-control" type='text' name="nama_p" id="nama_p" value='<?php echo $nama_p; ?>' autofocus required autocomplete='off'>
          </div>
		  <div class='form-group'>
			<label>Jenis Kelamin</label>
			<select class='form-control' name='id_jkl_p' id='id_jkl_p' data-search='true' required='yes' autocomplete='off'>
				<?php  
				$sql1 = "select * from tb_pasien,tb_jenis_kelamin where tb_pasien.id_jkl_p=tb_jenis_kelamin.id_jkl and id_p='$id'";
				$result1 = mysql_query($sql1);
				while($data1 = mysql_fetch_array($result1)){
					$id_jkl_p1 = $data1['id_jkl_p'];
					$nama_jkl1 = $data1['nama_jkl'];
				?>
			<option value='<?php echo $id_jkl_p1; ?>' hidden='true'><?php echo $nama_jkl1; ?></option>
				<?php
				}
				?>
				<?php  
				$sql2 = 'select * from tb_jenis_kelamin order by id_jkl ASC';
				$result2 = mysql_query($sql2);
				while($data2 = mysql_fetch_array($result2)){
					$id_jkl2 = $data2['id_jkl'];
					$nama_jkl2 = $data2['nama_jkl'];
				?>
			<option value='<?php echo $id_jkl2; ?>'><?php echo $nama_jkl2; ?></option>
				<?php
				}
				?>
			</select>
		  </div>
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input class="form-control" type='text' name="tempat_lahir_p" id="tempat_lahir_p" value='<?php echo $tempat_lahir_p; ?>' required autocomplete='off'>
          </div>
		  <div class="form-group">
            <label>Tanggal Lahir</label>
            <input class="form-control" type='date' name="tanggal_lahir_p" id="tanggal_lahir_p" value='<?php echo $tanggal_lahir_p; ?>' required autocomplete='off'>
          </div>
		  <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" type='text' name="alamat_p" id="alamat_p" required autocomplete='off'><?php echo $alamat_p; ?></textarea>
          </div>  
		  <div class="form-group">
            <label>Harga Daftar</label>
            <input class="form-control" type='number' name="harga_daftar_p" id="harga_daftar_p" value='<?php echo $harga_daftar_p; ?>' required autocomplete='off'>
          </div>
          <center><button type="submit" name="ubah_pasien" class="btn btn-sm btn-success">Ubah</button>
          <button type="reset" class="btn btn-sm btn-danger">Batal</button></center>
        </form>
		<br>
		
</div>
			
	<?php
	include 'control_pasien.php';
	?>

			<?php
			} else {
			include "404.php";
			}
			?>
			
			<?php
			}
			?>	