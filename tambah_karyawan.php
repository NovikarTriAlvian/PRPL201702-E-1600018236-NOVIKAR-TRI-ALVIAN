<!DOCTYPE html>
<html>
<head>
	<title> Data Pemesanan</title>
</head>
<body  bgcolor="Gray">
	<center>
		<h1>Data Pemesanan </h1>
	<form action="simpan_karyawan.php" method = "post">
		<table>
			<tr>
				<td> Tnggal Pemesanan</td>
				<td> : </td>
				<td> <input type = "date" name = "tanggal" ></td>   
			</tr>
			<tr>
				<td> Nama Lengkap </td>
				<td> : </td>
				<td> <input type="text" name = "NamaLengkap"> </td>
			</tr> 
			<tr>
				<td> Username </td>
				<td> : </td>
				<td> <input type = "text" name = "Username"></td>
			</tr>
			<tr>
				<td> No_Telpon </td>
				<td> : </td>
				<td> <input type = "number" name = "No_Telpon"></td>
			</tr>
						<tr>
				<td> Pesanan </td>
				<td> : </td>
				<td> <input type = "text" name = "Pesanan"></td>
			</tr>
			<tr>
				<td> Jumlah pesanan </td>
				<td> : </td>
				<td> <input type = "number" name = "Jumlah"></td>
			</tr>
			<tr>
				<td> Alamat </td>
				<td> : </td>
				<td> <textarea name = "Alamat" rows = "8" cols = "30"> </textarea>
				</tr>
			<tr>
				<td><br> <input type = "submit" value = "pesan"></td>
			</tr>
		</table>
	</form>						
</body>
</html>