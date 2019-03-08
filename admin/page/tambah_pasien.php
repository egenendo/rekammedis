	<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../">Home</a>
        </li>
        <li class="breadcrumb-item active">Tambah Pasien</li>
      </ol>
					
		<form method='post' role="form">
		  <div class="form-group">
            <label>Nama</label>
            <input class="form-control" type='text' name="nama_p" id="nama_p" placeholder="Masukkan Nama Disini ..." autofocus required autocomplete='off'>
          </div>
		  <div class="form-group">
            <label>Jenis Kelamin</label>
			<select class="form-control" name="id_jkl_p" id="id_jkl_p" required autocomplete='off'>
			<option value='' hidden='true'>Pilih Jenis Kelamin</option>
			<?php  
			$sql = 'select * from tb_jenis_kelamin order by id_jkl ASC';
			$result = mysql_query($sql);
			while($data = mysql_fetch_array($result)){
			$id_jkl = $data['id_jkl'];
			$nama_jkl = $data['nama_jkl'];
			?>
			<option value='<?php echo $id_jkl; ?>'><?php echo $nama_jkl; ?></option>
			<?php }?>
			</select>
		  </div>
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input class="form-control" type='text' name="tempat_lahir_p" id="tempat_lahir_p" placeholder="Masukkan Tempat Lahir Disini ..." required autocomplete='off'>
          </div>
		  <div class="form-group">
            <label>Tanggal Lahir</label>
            <input class="form-control" type='date' name="tanggal_lahir_p" id="tanggal_lahir_p" placeholder="Masukkan Tanggal Lahir Disini ..." required autocomplete='off'>
          </div>
		  <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" type='text' name="alamat_p" id="alamat_p" placeholder="Masukkan Alamat Disini ..." required autocomplete='off'></textarea>
          </div>
		  <div class="form-group">
            <label>Harga Pendaftaran</label>
            <input class="form-control" type='number' name="harga_daftar_p" id="harga_daftar_p" placeholder="Masukkan Harga Pendaftaran Disini ..." required autocomplete='off'>
          </div>
          <center><button type="submit" name="tambah_pasien" class="btn btn-sm btn-primary">Tambah</button>
          <button type="reset" class="btn btn-sm btn-danger">Batal</button></center>
        </form>
		<br>
		
</div>
			
	<?php
	include 'control_pasien.php';
	?>