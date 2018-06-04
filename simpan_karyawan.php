<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "Restoran";

$konek = new mysqli($host, $username, $password , $db_name);

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$tanggal = $_POST['tanggal'];
$NamaLengkap = $_POST['NamaLengkap'];
$Username = $_POST['Username'];
$No_Telpon = $_POST['No_Telpon'];
$Pesanan = $_POST['Pesanan'];
$Jumlah = $_POST['Jumlah'];
$Alamat = $_POST['Alamat'];

$sql = "INSERT INTO Karyawan (tanggal, NamaLengkap, Username, No_Telpon, Pesanan, Jumlah, Alamat) VALUES ('$tanggal','$NamaLengkap','$Username','$No_Telpon','$Pesanan','$Jumlah','$Alamat')";

if($konek->query($sql)){
  echo "Data karyawan BERHASIL ditambah!<br/>";
}else{
  echo "Data karyawan GAGAL ditambah : ".$konek->error."<br/>";
}

$konek->close();

//echo "<br><a href='tambah_karyawan.php'>Tambah Data Karyawan </a>";
//echo "<br><a href='tampil_karyawan.php'>Tampil Data Karyawan </a>";

if(isset($_GET['tanggal'])){
	if($_GET['tanggal'] == "kosong"){
		echo "<h4 style='color:red'>Tanggal Belum Di Masukkan !</h4>";
	}
?>