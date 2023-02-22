<?php
    require ('../examples/koneksi.php');
    $id = $_GET['id_artikel'];
    mysqli_query($koneksi, "DELETE FROM artikel WHERE id_artikel='$id'");
    echo "
		<script>
		setTimeout(function() { 
			Swal.fire({
				title: 'Berhasil menghapus data!',
				text: 'Anda masuk ke halaman daftar artikel',
				icon: 'success',
			});
		},10);  
		window.setTimeout(function(){ 
			window.location.replace('artikel');
		},1500);
		</script>
      ";
?>
<script src="../../package/sweetalert2.all.min.js"></script>