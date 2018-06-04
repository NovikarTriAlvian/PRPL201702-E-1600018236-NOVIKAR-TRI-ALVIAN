<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "Restoran";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM Karyawan";
$data = $konek->query($sql);

//echo "<a href='index.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Karyawan yang Mendaftar</h1>";
//echo "<table border='1'>";
//echo "<tr><td>No.</td><td>ID Customer</td><td>Nama Customer</td><td>Alamat Customer</td><td colspan=2>Aksi</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td><br>Data Karyawan ".$no++."<br><br></td>";
	 echo "<td>Nama Lengkap : ".$row['Tanggal']."<br></td>";
    echo "<td>Nama Lengkap : ".$row['NamaLengkap']."<br></td>";
    echo "<td>Username : ".$row['Username']."<br></td>";
	echo "<td>No_Telpon : ".$row['No_Telpon']."<br></td>";
	 echo "<td>Nama Lengkap : ".$row['pesanan']."<br></td>";
	  echo "<td>Nama Lengkap : ".$row['jumlah']."<br></td>";
    echo "<td>Alamat : ".$row['Alamat']."<br></td>";
    //echo "<td><a href='formupdate_customer.php?IdCustomer=".$row['IdCustomer']."'>Edit</a></td>";
    //echo "<td><a href='delete_customer.php?IdCustomer=".$row['IdCustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
