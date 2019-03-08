<?php
$id = $_GET['id'];

$query = mysql_query("DELETE FROM tb_obat WHERE id_o='$id'");

if ($query){
	echo "<script>window.location = 'index?p=data_obat'</script>";	
} else {
	echo "<script>window.location = 'index?p=data_obat'</script>";	
}
?>