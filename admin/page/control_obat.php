<?php
if(isset($_POST['tambah_obat'])){

$nama_o = $_POST['nama_o'];
$harga_o = $_POST['harga_o'];

$sql = "INSERT INTO tb_obat VALUES('','$nama_o','$harga_o')";
$w = mysql_query($sql);

if($w){
echo "<script>alert('Selamat, Data Obat Berhasil Ditambahkan'); window.location = 'index?p=data_obat'</script>";
} 

}
?>

<?php
if(isset($_POST['ubah_obat'])){

$id = $_GET['id'];

$nama_o = $_POST['nama_o'];
$harga_o = $_POST['harga_o'];

$sql = "UPDATE tb_obat SET 
						nama_o = '$nama_o',
						harga_o = '$harga_o' WHERE 
						id_o = '$id'";
$result = mysql_query($sql);

if($result){
echo "<script>alert('Selamat, Data Obat Telah Berhasil Diubah'); window.location = 'index?p=data_obat'</script>";	
}

}
?>