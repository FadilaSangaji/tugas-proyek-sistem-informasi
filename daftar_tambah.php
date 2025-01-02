 <?php
include'koneksi.php';
?>
<html>
<head>
	<title>Pendaftaran</title>
	<style>
		hr{
			margin-bottom: 10px;

		}
		table{
			width: 70%;
			border: solid black 1px;
			border-collapse: collapse;
		}
		table td{
			border: solid black 1px;
			padding: 10px 20px;
		}
		#btn_tambah{
			display: inline-block;
			margin-bottom: 10px;
			text-decoration: none;
			background: black;
			color: white;
			padding: 8px 10px;
			border-radius: 10px;

		}
		#btn_tambah:hover{
			background: navy;
			color: white;

		}
		input[type='text']{
			width: 100%;
			padding: 2% 3%;
			font-size: 16px;
		}
		input[type='submit']{
			background: black;
			color: white;
			border-radius: 10px;
			padding: 8px 10px;
			border:none;
			cursor: pointer;
		}
		input[type='submit']:hover{
			background: navy;
			color: white;
		}
		#sukses{
			background:navy; 
			color:white;
			padding:1% 2%;
			margin-bottom:20px;
			width:66%;
		}
		#gagal{
			background:navy; 
			color:white;
			padding:1% 2%;
			margin-bottom:20px;
			width:66%;
		}
	</style>
</head>
<body>
	<h1>Tambah Data Pendaftaran</h1>
	<hr>
		<a href="index.php?ke=pendaftaran" id="btn_tambah">Kembali</a>
		
			<?php
	
	if (isset($_POST['bsimpan'])) {
		$a =$_POST['tnama'];
		$b =$_POST['tnik'];
		$c =$_POST['tjns_kel'];
		$d =$_POST['talamat'];
		$e =$_POST['tno_dg'];
		$f =$_POST['tjns_kdrn'];
		$g =$_POST['tinput_ktp'];
		$h =$_POST['tinput_stnk'];
		$i =$_POST['tno_antrian'];

		$simpan = mysqli_query($konek, "INSERT INTO tbl_wp(nma_wp,nik_wp,jns_kel,alamat_wp,no_dg,jns_kdrn,input_stnk,input_ktp,no_antrian) VALUES ('$a','$b', '$c','$d','$e','$f','$g','$h','$i')");

		if ($simpan) {
			echo "<div id='sukses'> Data berhasil disimpan</div>";
		}else{
			echo "<div id='gagal'> Data gagal disimpan</div>";
			}
		}
	 ?>

<form method="POST" action="">
	<table>
		<tr>
			<td>Nama WP</td>
			<td>
				<input type="text" name="tnama">
			</td>
		</tr>
		<tr>
			<td>nik wp</td>
			<td>
				<input type="text" name="tnik">
			</td>
		</tr>
		<tr>
			<td>jenis kelamin</td>
			<td>
				<input type="text" name="tjns_kel">
			</td>
		</tr>
		<tr>
			<td>alamat</td>
			<td>
				<input type="text" name="talamat">
			</td>
		</tr>
		<tr>
			<td>no dg</td>
			<td>
				<input type="text" name="tno_dg">
			</td>
		</tr>
		<tr>
			<td>jenis kendaraan</td>
			<td>
				<input type="text" name="tjns_kdrn">
			</td>
		</tr>
		<tr>
			<td>input KTP</td>
			<td>
				<input type="file" name="tinput_ktp">
			</td>
		</tr>
		<tr>
			<td>input stnk</td>
			<td>
				<input type="file" name="tinput_stnk">
			</td>
		</tr>
		<tr>
			<td>no antrian</td>
			<td>
				<input type="text" name="tno_antrian">
			</td>
		</tr>
		<tr>
			<td> &nbsp; </td>
			<td><input type="submit" name="bsimpan" value="SIMPAN"></td>

		</tr>
	</table>
</form>
</body>
</html>