
<?php 
include 'koneksi.php';



if(isset($_GET["id"])){
	$hapus = $_GET["id"];
	mysqli_query($konek,"DELETE FROM tbl_wp WHERE id_wp = $hapus");
	echo "DATA BERHASIL DIHAPUS";
	header('location:index.php?ke=pendaftaran');
}else{
	echo "DATA GAGAL DIHAPUS";
	header('location:index.php?ke=pendaftaran');
	
}


 ?>