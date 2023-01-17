<?php 
    session_start();
    session_destroy();

    echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Berhasil Logout!',
							text: 'Selamat datang di halaman Login',
							icon: 'success',
							showCancelButton: false,
							showConfirmButton: false
						});
					},10);  
					window.setTimeout(function(){ 
						window.location.replace('login.php');
					},1500);
				</script>
			";
?>
<script src="../../package/sweetalert2.all.min.js"></script>