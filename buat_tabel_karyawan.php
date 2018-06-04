<?php 
	$konek = new mysqli("localhost","root","","Restoran");

	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
	
//tabel karyawan
	$sql = "create table Karyawan (Tanggal varchar(30), NamaLengkap varchar(30), Username varchar(30), No_Telpon varchar(40), Pesanan varchar(100), Jumlah varchar(30), Alamat varchar(200) )";
	if($konek->query($sql)){
		echo "Tabel Berhasil di Buat";
	}
	else{
		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
	}
//	echo "<br><br><a href='index.php'>Kembali Ke Menu Utama </a>";

?>	