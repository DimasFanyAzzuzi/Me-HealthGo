<?php
    require ('../examples/koneksi.php');
    $id = $_GET['id_kuisioner'];
    mysqli_query($koneksi, "DELETE FROM kuisioner WHERE id_kuisioner='$id'");
    echo "
		<script>
		setTimeout(function() { 
			Swal.fire({
				title: 'Berhasil menghapus data!',
				text: 'Anda masuk ke halaman daftar kuis',
				icon: 'success',
			});
		},10);  
		window.setTimeout(function(){ 
			window.location.replace('daftar-kuis');
		},1500);
		</script>
      ";
?>
<script src="../../package/sweetalert2.all.min.js"></script>