<?php
   require "koneksi.php";
   // Input text KodeBIO, Nama, dan Jenis Kelamin
   $id = $_POST['id_konsultan'];
   $InputNam = $_POST['nama'];
   $InputHp = $_POST['noHp'];
   $InputPek = $_POST['pekerjaan'];
   $InputAm = $_POST['alamat'];

   if (empty($InputNam) || empty($InputHp) || empty($InputPek) || empty($InputAm)) {
      echo "
         <script>
            alert('Mohon lengkapi seluruh data!');
            document.location.href = 'edit-data-konsultan';
         </script>
      ";
   }
   else {
      mysqli_query($koneksi, "UPDATE konsultan SET nama = '$InputNam', noHp = '$InputHp', pekerjaan = '$InputPek', alamat = '$InputAm' where id_konsultan = '$id'");
      echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Berhasil menambahkah data!',
							text: 'Anda masuk ke halaman Daftar Konsultan',
							icon: 'success',
						});
					},10);  
					window.setTimeout(function(){ 
						window.location.replace('konsultan');
					},1500);
				</script>
			";
   }
?>
<script src="../../package/sweetalert2.all.min.js"></script>