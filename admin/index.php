<?php 
session_start();
include "../ctrl/koneksi.php";
include "../ctrl/code.php";

	if (empty($_SESSION['username_k'])) 
	{
		
		header('Location: ../index');
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Rekam Medis</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../">Rekam Medis</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
	<?php
	$cek_session = $_SESSION['username_k'];
	$queryy = "select * from tb_karyawan where username_k='$cek_session'";
	$sqll = mysql_query($queryy) or die(mysql_error());
	while($data = mysql_fetch_array($sqll)){ 
		$id_level_k = $data['id_level_k'];
	}
	
	if($id_level_k == '1'){
	?>
	<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="karyawan">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsekaryawan" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Karyawan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsekaryawan">
            <li>
              <a href="index?p=data_karyawan">Karyawan</a>
            </li>
			<li>
              <a href="index?p=data_jabatan_karyawan">Jabatan Karyawan</a>
            </li>
            <li>
              <a href="index?p=data_bagian_karyawan">Bagian Karyawan</a>
            </li>
          </ul>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="medis">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsemedis" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-medkit"></i>
            <span class="nav-link-text">Medis</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsemedis">
            <li>
              <a href="index?p=data_pasien">Pasien</a>
            </li>
			<li>
              <a href="index?p=data_obat">Obat</a>
            </li>
            <li>
              <a href="index?p=data_diagnosa">Diagnosa</a>
            </li>
          </ul>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="admin">
          <a class="nav-link" href="index?p=data_laporan">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="../ctrl/logout">
            <i class="fa fa-fw fa-sign-out"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>
      </ul>	  
	  <?php
      }
	  
	  if($id_level_k == '4'){
	  ?>
	  <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="admin">
          <a class="nav-link" href="index?p=data_pembayaran">
            <i class="fa fa-fw fa-money"></i>
            <span class="nav-link-text">Pembayaran</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="../ctrl/logout">
            <i class="fa fa-fw fa-sign-out"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>
      </ul>	  
	  <?php
	  }
	  
	  if($id_level_k == '2' OR $id_level_k == '3'){
	  ?>
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="admin">
          <a class="nav-link" href="index?p=data_pemeriksaan">
            <i class="fa fa-fw fa-medkit"></i>
            <span class="nav-link-text">Pemeriksaan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="../ctrl/logout">
            <i class="fa fa-fw fa-sign-out"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>
      </ul>	  
	  <?php
	  }
	  ?>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
		<?php
			$cek_session = $_SESSION['username_k'];				
			$queryy = "select * from tb_karyawan where username_k='$cek_session'";
			$sqll = mysql_query($queryy) or die(mysql_error());
			$data = mysql_fetch_array($sqll); 
			$nama_k = $data['nama_k'];
		?>
            <font style="color:white;">Hallo, <?php echo $nama_k; ?></font>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">

  <!--content-->
		<?php
        $pages_dir = 'page';
		if(!empty($_GET['p'])){
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);
			$p = $_GET['p'].'.php';
			if(in_array($p, $pages)){
				include($pages_dir.'/'.$p);
				} else {
					include($pages_dir.'/404.php');
				}
			} else {
				include($pages_dir.'/home.php');
			}
			?>
	<!--//content-->
  
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
		  <?php
			$copyright = date('Y');
		  ?>
          <small>Copyright © Rekam Medis <?php echo $copyright;?></small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
