	<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../">Home</a>
        </li>
        <li class="breadcrumb-item active">Tambah Karyawan</li>
      </ol>
					
		<form method='post' role="form">
		  <div class="form-group">
            <label>Nama</label>
            <input class="form-control" type='text' name="nama_k" id="nama_k" placeholder="Masukkan Nama Disini ..." autofocus required autocomplete='off'>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input class="form-control" type='text' name="username_k" id="username_k" placeholder="Masukkan Username Disini ..." required autocomplete='off'>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" type='text' name="password_k" id="password_k" placeholder="Masukkan Password Disini ..." required autocomplete='off'>
          </div>
		  <div class="form-group">
            <label>Jabatan</label>
			<select class="form-control" name="id_level_k" id="id_level_k" required autocomplete='off'>
			<option value='' hidden='true'>Pilih Jabatan</option>
			<?php  
			$sql = 'select * from tb_jabatan_karyawan order by id_jk ASC';
			$result = mysql_query($sql);
			while($data = mysql_fetch_array($result)){
			$id_jk = $data['id_jk'];
			$level_jk = $data['level_jk'];
			?>
			<option value='<?php echo $id_jk; ?>'><?php echo $level_jk; ?></option>
			<?php }?>
			</select>
		  </div>
		  <div class="form-group">
            <label>Bagian</label>
			<select class="form-control" name="id_bagian_k" id="id_bagian_k" required autocomplete='off'>
			<option value='' hidden='true'>Pilih Bagian</option>
			<?php  
			$sql = 'select * from tb_bagian_karyawan order by id_bk ASC';
			$result = mysql_query($sql);
			while($data = mysql_fetch_array($result)){
			$id_bk = $data['id_bk'];
			$nama_bk = $data['nama_bk'];
			?>
			<option value='<?php echo $id_bk; ?>'><?php echo $nama_bk; ?></option>
			<?php }?>
			</select>
		  </div>
          <center><button type="submit" name="tambah_karyawan" class="btn btn-sm btn-primary">Tambah</button>
          <button type="reset" class="btn btn-sm btn-danger">Batal</button></center>
        </form>
		<br>
		
</div>
			
	<?php
	include 'control_karyawan.php';
	?>