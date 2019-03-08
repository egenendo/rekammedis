<?php
if(isset($_POST['tambah_pasien'])){

$nama_p = $_POST['nama_p'];
$id_jkl_p = $_POST['id_jkl_p'];
$tempat_lahir_p = $_POST['tempat_lahir_p'];
$tanggal_lahir_p = $_POST['tanggal_lahir_p'];
$alamat_p = $_POST['alamat_p'];
$harga_daftar_p = $_POST['harga_daftar_p'];
$cek_session = $_SESSION['username_k'];

$sql = "INSERT INTO tb_pasien VALUES('','$nama_p','$id_jkl_p','$tempat_lahir_p','$tanggal_lahir_p','$alamat_p','$harga_daftar_p','$cek_session',now(),now())";
$w = mysql_query($sql);

if($w){
echo "<script>alert('Selamat, Data Pasien Berhasil Ditambahkan'); window.location = 'index?p=data_pasien'</script>";
} 

}
?>

<?php
if(isset($_POST['ubah_pasien'])){

$id = $_GET['id'];

$nama_p = $_POST['nama_p'];
$id_jkl_p = $_POST['id_jkl_p'];
$tempat_lahir_p = $_POST['tempat_lahir_p'];
$tanggal_lahir_p = $_POST['tanggal_lahir_p'];
$alamat_p = $_POST['alamat_p'];
$harga_daftar_p = $_POST['harga_daftar_p'];

$sql = "UPDATE tb_pasien SET 
						nama_p = '$nama_p',
						id_jkl_p = '$id_jkl_p',
						tempat_lahir_p = '$tempat_lahir_p',
						tanggal_lahir_p = '$tanggal_lahir_p', 
						alamat_p = '$alamat_p',
						harga_daftar_p = '$harga_daftar_p' WHERE 
						id_p = '$id'";
$result = mysql_query($sql);

if($result){
echo "<script>alert('Selamat, Data Pasien Telah Berhasil Diubah'); window.location = 'index?p=data_pasien'</script>";	
}		  

}
?>