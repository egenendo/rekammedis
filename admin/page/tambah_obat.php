	<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../">Home</a>
        </li>
        <li class="breadcrumb-item active">Tambah Obat</li>
      </ol>
					
		<form method='post' role="form">
          <div class="form-group">
            <label>Nama</label>
            <input class="form-control" type='text' name="nama_o" id="nama_o" placeholder="Masukkan Nama Disini ..." autofocus required autocomplete='off'>
          </div>
		  <div class="form-group">
            <label>Harga</label>
            <input class="form-control" type='number' name="harga_o" id="harga_o" placeholder="Masukkan Harga Disini ..." required autocomplete='off'>
          </div>
          <center><button type="submit" name="tambah_obat" class="btn btn-sm btn-primary">Tambah</button>
          <button type="reset" class="btn btn-sm btn-danger">Batal</button></center>
        </form>
		<br>
		
</div>
			
	<?php
	include 'control_obat.php';
	?>