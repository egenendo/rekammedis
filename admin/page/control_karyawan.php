<?php
if(isset($_POST['tambah_karyawan'])){

$nama_k = $_POST['nama_k'];
$username_k = $_POST['username_k'];
$password_k = $_POST['password_k'];
$id_level_k = $_POST['id_level_k'];
$id_bagian_k = $_POST['id_bagian_k'];
$cek_session = $_SESSION['username_k'];

$cek_username = mysql_query("select * from tb_karyawan where username_k='$username_k'");
$cek_usernamee = mysql_num_rows($cek_username);

if($cek_usernamee > 0){
echo "<script>alert('Username Tidak Boleh Ada Yang Sama, Mohon Tambahkan Username Lainnya'); window.location = 'index?p=tambah_karyawan'</script>";
} 

if($cek_usernamee == 0){
$sql = "INSERT INTO tb_karyawan VALUES('','$username_k','$password_k','$nama_k','$id_level_k','$id_bagian_k','$cek_session',now(),now())";
$w = mysql_query($sql);
}	

if($w){
echo "<script>alert('Selamat, Data Karyawan Berhasil Ditambahkan'); window.location = 'index?p=data_karyawan'</script>";
} 

}
?>

<?php
if(isset($_POST['ubah_karyawan'])){

$id = $_GET['id'];

$nama_k = $_POST['nama_k'];
$password_k = $_POST['password_k'];
$id_level_k = $_POST['id_level_k'];
$id_bagian_k = $_POST['id_bagian_k'];

$sql = "UPDATE tb_karyawan SET 
						password_k = '$password_k',
						nama_k = '$nama_k',
						id_level_k = '$id_level_k',
						id_bagian_k = '$id_bagian_k' WHERE 
						username_k = '$id'";
$result = mysql_query($sql);

if($result){
echo "<script>alert('Selamat, Data Karyawan Telah Berhasil Diubah'); window.location = 'index?p=data_karyawan'</script>";	
}		  

}
?>