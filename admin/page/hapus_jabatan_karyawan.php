<?php
$id = $_GET['id'];

$query = mysql_query("DELETE FROM tb_jabatan_karyawan WHERE id_jk='$id'");

if ($query){
	echo "<script>window.location = 'index?p=data_jabatan_karyawan'</script>";	
} else {
	echo "<script>window.location = 'index?p=data_jabatan_karyawan'</script>";	
}
?>