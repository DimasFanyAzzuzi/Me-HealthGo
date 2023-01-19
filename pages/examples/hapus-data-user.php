<?php
    require ('../examples/koneksi.php');
    $id = $_GET['id_user'];
    mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'");
    echo "
		<script>
		setTimeout(function() { 
			Swal.fire({
				title: 'Berhasil menghapus data!',
				text: 'Anda masuk ke halaman daftar user',
				icon: 'success',
			});
		},10);  
		window.setTimeout(function(){ 
			window.location.replace('daftar-user.php');
		},1500);
		</script>
      ";
?>
<script src="../../package/sweetalert2.all.min.js"></script>