					<?php
					if(empty($_GET['id'])){
					include '404.php';
					} else {
					?>
					
					<?php
					$id = $_GET['id'];
                    $query = mysql_query("SELECT * FROM tb_obat WHERE 
										 id_o='$id'");
                    $data  = mysql_fetch_array($query);
					$id_o = $data['id_o'];
					$nama_o = $data['nama_o'];
					$harga_o = $data['harga_o'];
					
					if($id_o == $id){					
                    ?>

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../">Home</a>
        </li>
        <li class="breadcrumb-item active">Ubah Obat</li>
      </ol>
					
		<form method='post' enctype="multipart/form-data" role="form">
          <div class="form-group">
            <label>Nama</label>
            <input class="form-control" type='text' name="nama_o" id="nama_o" value='<?php echo $nama_o; ?>' autofocus required autocomplete='off'>
          </div>
		  <div class="form-group">
            <label>Harga</label>
            <input class="form-control" type='int' name="harga_o" id="harga_o" value='<?php echo $harga_o; ?>' required autocomplete='off'>
          </div>			  
          <center><button type="submit" name="ubah_obat" class="btn btn-sm btn-success">Ubah</button>
          <button type="reset" class="btn btn-sm btn-danger">Batal</button></center>
        </form>
		<br>
		
</div>
			
	<?php
	include 'control_obat.php';
	?>

			<?php
			} else {
			include "404.php";
			}
			?>
			
			<?php
			}
			?>	