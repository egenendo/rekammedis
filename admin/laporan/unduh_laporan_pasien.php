<?php
include "../../ctrl/koneksi.php";
include "../../ctrl/code.php";
$fileName = "data_laporan_pasien_" . date('dmy') . "_" . time() . ".doc";
header("Content-Type: application/vnd-ms-word");
header("Content-Type: image/jpeg");
header("Content-Disposition: attachment; filename=$fileName");
?>

<html lang="en">

<head>
<!-- Bootstrap core CSS-->
<link href="C:/xampp/htdocs/surat/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="C:/xampp/htdocs/surat/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- Page level plugin CSS-->
<link href="C:/xampp/htdocs/surat/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="C:/xampp/htdocs/surat/css/sb-admin.css" rel="stylesheet">
</head>

			<center>
			<img src="C:/xampp/htdocs/surat/files/logo.png" /><br>
			Klinik Pengobatan Palembang<br>
			Nomor: 445.2 / 04 / 403.210.2013<br>
			Jl. Dr. Sutomo No. 2A Magetan<br>
			Telp. 0351-7703377
			</center>
			<hr>
			<center><b>Laporan Pasien</b></center><br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
				  <th>Alamat</th>
                </tr>
              </thead>
              <tbody>
			  <?php
				$no = 1;				
				$queryy = "select * from tb_pasien order by id_p desc";
				$sqll = mysql_query($queryy) or die(mysql_error());
				while($data = mysql_fetch_array($sqll)){ 
				$id_p = $data['id_p'];
				$nama_p = $data['nama_p'];
				$alamat_p = $data['alamat_p'];
			  ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><a href='index?p=detail_pasien&id=<?php echo $id_p;?>'><?php echo $nama_p; ?></a></td>
				  <td><?php echo $alamat_p; ?></td>
                </tr>
			  <?php
				$no++; }
			  ?>	
              </tbody>
            </table>
			
</html>