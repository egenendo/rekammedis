<?php
$id = $_GET['id'];

$query = mysql_query("SELECT * FROM tb_karyawan WHERE 
											 username_k='$id'");
$data  = mysql_fetch_array($query);
$username_k = $data['username_k'];

$cek_session = $_SESSION['username_k'];

if($username_k == $cek_session){

$query = mysql_query("DELETE FROM tb_karyawan WHERE username_k='$id'");

if ($query){
	session_destroy();
	echo "<script>window.location = './'</script>";	
}
} else {

$queryy = mysql_query("DELETE FROM tb_karyawan WHERE username_k='$id'");

if ($queryy){
	echo "<script>window.location = 'index?p=data_karyawan'</script>";	
} else {
	echo "<script>window.location = 'index?p=data_karyawan'</script>";	
}

}
?>