<?php
session_start();

include ("koneksi.php");
date_default_timezone_set('Asia/Jakarta');

$username_k = $_POST['username_k'];
$password_k = $_POST['password_k'];

$query = mysql_query("select * from tb_karyawan where username_k='$username_k' and password_k='$password_k'");
$row = mysql_fetch_array($query);

if (mysql_num_rows($query) > 0) {
	session_start();
    $_SESSION['username_k'] = $row['username_k'];
	header('location:../admin');
} else {
	echo "<script>alert('Username / Password Yang Anda Masukkan Salah'); window.location = '../'</script>";
}
?>