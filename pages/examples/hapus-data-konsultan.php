<?php
	require "koneksi.php";

	$UserId = $_GET['id_konsultan'];

	$SelectData = mysqli_query($koneksi, "SELECT * FROM konsultan WHERE id_konsultan = '$UserId'");
	$GetDataIMG = mysqli_fetch_array($SelectData);
	$RemoveIMG = unlink("../../assets/img/img-kons/$GetDataIMG[imageUrl]");

	if ($RemoveIMG) {
		mysqli_query($koneksi, "DELETE FROM konsultan WHERE id_konsultan = '$UserId'");
		echo "
		<script>
		setTimeout(function() { 
			Swal.fire({
				title: 'Berhasil menghapus data!',
				text: 'Anda masuk ke halaman Daftar Konsultan',
				icon: 'success',
			});
		},10);  
		window.setTimeout(function(){ 
			window.location.replace('konsultan.php');
		},1500);
		</script>
      ";
	}
?>
<script src="../../package/sweetalert2.all.min.js"></script>