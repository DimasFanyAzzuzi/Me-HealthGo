<?php
   require "koneksi.php";
   // Input text KodeBIO, Nama, dan Jenis Kelamin
   $InputP = $_POST['pertanyaan'];

   if (empty($InputP)) {
      echo "
         <script>
            alert('Mohon lengkapi seluruh data!');
            document.location.href = 'tambah-data-kuis';
         </script>
      ";
   }
   
   else {
      mysqli_query($koneksi, "INSERT INTO kuisioner (pertanyaan) VALUES ('$InputP')");
      echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Berhasil menambahkah data!',
							text: 'Anda masuk ke halaman daftar kuis',
							icon: 'success',
						});
					},10);  
					window.setTimeout(function(){ 
						window.location.replace('daftar-kuis');
					},1500);
				</script>
			";
   }
?>
<script src="../../package/sweetalert2.all.min.js"></script>