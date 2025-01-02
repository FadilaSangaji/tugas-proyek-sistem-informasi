<html>
<head>
	<title>Ubah</title>
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
	<h2>Ubah Data Daftar</h2>
	<hr>
		<a href="index.php?ke=pendaftaran" id="btn_tambah">Kembali</a>
		
		<?php
		include 'koneksi.php';
		if(isset($_GET['a'])){
		$id_wp = $_GET['a'];
		$tampil = mysqli_query($konek, "SELECT * FROM tbl_wp WHERE id_wp = '$id_wp'");
		$tampil_data = mysqli_fetch_assoc($tampil);


}
		if (isset($_POST['bsimpan'])) {
			$id =$_POST['id_wp'];

			$a =$_POST['tnama'];
			$b =$_POST['tnik'];
			$c =$_POST['tjns_kel'];
			$d =$_POST['talamat'];
			$e =$_POST['tno_dg'];
			$f =$_POST['tjns_kdrn'];
			$g =$_POST['tinput_ktp'];
			$h =$_POST['tinput_stnk'];
			$i =$_POST['tno_antrian'];
			$hasil = mysqli_query($konek,"UPDATE tbl_wp SET nma_wp = '$a', nik_wp = '$b' , jns_kel = '$c' , alamat_wp = ' $d', no_dg = '$e', jns_kdrn = '$f', input_ktp = '$g', input_stnk ='$h', no_antrian = '$i' WHERE id_wp = '$id'");
			if ($hasil) {
				header('location:index.php?ke=pendaftaran');
			}else{
				echo "<div id='gagal'> Data gagal dihapus</div>";
				}
			}
		 ?>



	<form method="post" action="">
		<table>
			<input type="hidden" name="id_wp" id="" value="<?= $tampil_data['id_wp']; ?>">
			<tr>
				<td>Nama WP</td>
				<td>
					<input type="text" name="tnama" id="" value="<?php echo $tampil_data['nma_wp']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nik WP</td>
				<td>
					<input type="text" name="tnik" id="" value="<?= $tampil_data['nik_wp'] ?>">
				</td>
			</tr>
			<tr>
				<td>Kenis kelamin</td>
				<td>
					<input type="text" name="tjns_kel" id="" value="<?= $tampil_data['jns_kel'] ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<input type="text" name="talamat" id="" value="<?= $tampil_data['alamat_wp'] ?>">
				</td>
			</tr>
			<tr>
				<td>No dg</td>
				<td>
					<input type="text" name="tno_dg" id="" value="<?= $tampil_data['no_dg'] ?>">
				</td>
			</tr>
			<tr>
				<td>jenis kendaraan</td>
				<td>
					<input type="text" name="tjns_kdrn" id="" value="<?= $tampil_data['jns_kdrn'] ?>">
				</td>
			</tr>
			<tr>
				<td>Input ktp</td>
				<td>
					<input type="file" name="tinput_ktp" id="" value="<?= $tampil_data['input_ktp'] ?>">
				</td>
			</tr>
			<tr>
				<td>Input stnk</td>
				<td>
					<input type="file" name="tinput_stnk" id="" value="<?= $tampil_data['input_stnk'] ?>">
				</td>
			</tr>
			<tr>
				<td>No antrian</td>
				<td>
					<input type="text" name="tno_antrian" id="" value="<?= $tampil_data['no_antrian'] ?>">
				</td>
			</tr>
			<tr>
				
				<td colspan="2">
					<input type="submit" name="bsimpan" value="Ubah DATA"></td>

			</tr>
		</table>
	</form>
</body>
</html>