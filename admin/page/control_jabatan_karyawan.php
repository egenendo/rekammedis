<?php
if(isset($_POST['tambah_jabatan_karyawan'])){

$level_jk = $_POST['level_jk'];

$cek_jabatan = mysql_query("select * from tb_jabatan_karyawan where level_jk='$level_jk'");
$cek_jabatann = mysql_num_rows($cek_jabatan);

if($cek_jabatann > 0){
echo "<script>alert('Jabatan Tidak Boleh Ada Yang Sama, Mohon Tambahkan Jabatan Lainnya'); window.location = 'index?p=tambah_jabatan_karyawan'</script>";
} 

if($cek_jabatann == 0){
$sql = "INSERT INTO tb_jabatan_karyawan VALUES('','$level_jk')";
$w = mysql_query($sql);
}	

if($w){
echo "<script>alert('Selamat, Data Jabatan Karyawan Berhasil Ditambahkan'); window.location = 'index?p=data_jabatan_karyawan'</script>";
} 

}
?>

<?php
if(isset($_POST['ubah_jabatan_karyawan'])){

$id = $_GET['id'];

$level_jk = $_POST['level_jk'];

$sql = "UPDATE tb_jabatan_karyawan SET 
						level_jk = '$level_jk' WHERE 
						id_jk = '$id'";
$result = mysql_query($sql);

if($result){
echo "<script>alert('Selamat, Data Jabatan Karyawan Telah Berhasil Diubah'); window.location = 'index?p=data_jabatan_karyawan'</script>";	
}

}
?>