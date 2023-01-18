<?php
	require "koneksi.php";

	$UserId = $_GET['id_gambar'];

	$SelectData = mysqli_query($koneksi, "SELECT * FROM gambar_artikel WHERE id_gambar = '$UserId'");
	$GetDataIMG = mysqli_fetch_array($SelectData);
	$RemoveIMG = unlink("../../assets/img/img-artikel/$GetDataIMG[nama_gambar]");

	if ($RemoveIMG) {
		mysqli_query($koneksi, "DELETE FROM gambar_artikel WHERE id_gambar = '$UserId'");
		echo "
		<script>
		setTimeout(function() { 
			Swal.fire({
				title: 'Berhasil menghapus data!',
				text: 'Anda masuk ke halaman Daftar Gambar',
				icon: 'success',
			});
		},10);  
		window.setTimeout(function(){ 
			window.location.replace('gambar_artikel.php');
		},1500);
		</script>
      ";
	}
?>
<script src="../../package/sweetalert2.all.min.js"></script>