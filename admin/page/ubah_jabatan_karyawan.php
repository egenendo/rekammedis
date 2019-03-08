					<?php
					if(empty($_GET['id'])){
					include '404.php';
					} else {
					?>
					
					<?php
					$id = $_GET['id'];
                    $query = mysql_query("SELECT * FROM tb_jabatan_karyawan WHERE 
										 id_jk='$id'");
                    $data  = mysql_fetch_array($query);
					$id_jk = $data['id_jk'];
					$level_jk = $data['level_jk'];
					
					if($id_jk == $id){					
                    ?>

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../">Home</a>
        </li>
        <li class="breadcrumb-item active">Ubah Jabatan Karyawan</li>
      </ol>
					
		<form method='post' enctype="multipart/form-data" role="form">
          <div class="form-group">
            <label>Jabatan</label>
            <input class="form-control" type='text' name="level_jk" id="level_jk" value='<?php echo $level_jk; ?>' autofocus required autocomplete='off'>
          </div>	
          <center><button type="submit" name="ubah_jabatan_karyawan" class="btn btn-sm btn-success">Ubah</button>
          <button type="reset" class="btn btn-sm btn-danger">Batal</button></center>
        </form>
		<br>
		
</div>
			
	<?php
	include 'control_jabatan_karyawan.php';
	?>

			<?php
			} else {
			include "404.php";
			}
			?>
			
			<?php
			}
			?>	