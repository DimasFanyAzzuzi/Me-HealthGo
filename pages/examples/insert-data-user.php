<?php
   require "koneksi.php";
   // Input text KodeBIO, Nama, dan Jenis Kelamin
   $InputNam = $_POST['name'];
   $InputJk = $_POST['jenis_kelamin'];
   $InputUm = $_POST['umur'];
   $InputAs = $_POST['asal_sekolah'];
   $InputUs = $_POST['username'];
   $InputPs = md5($_POST['password']);
   $InputR = $_POST['role'];

   if (empty($InputNam) || empty($InputJk) || empty($InputUm) || empty($InputAs) || empty($InputUs) || empty($InputPs) || empty($InputR)) {
      echo "
         <script>
            alert('Mohon lengkapi seluruh data!');
            document.location.href = 'tambah-data-user';
         </script>
      ";
   }
   // else if (empty($InputNama)) {
   //    echo "
   //       <script>
   //          alert('Nama belum diisi!');
   //          document.location.href = '../examples/tambah-data';
   //       </script>
   //    ";
   // }
   // else if (empty($ChooseKL)) {
   //    echo "
   //       <script>
   //          alert('Jenis kelamin belum diisi!');
   //          document.location.href = '../form-biodata';
   //       </script>
   //    ";
   // }
   // else if (empty($InputNip)) {
   //    echo "
   //       <script>
   //          alert('Profesi belum diisi!');
   //          document.location.href = '../form-biodata';
   //       </script>
   //    ";
   // }
   
   else {
      mysqli_query($koneksi, "INSERT INTO user (username, jenis_kelamin, umur, asal_sekolah, name, password, role) VALUES ('$InputUs','$InputJk','$InputUm','$InputAs','$InputNam','$InputPs','$InputR')");
      echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Berhasil menambahkah data!',
							text: 'Anda masuk ke halaman daftar user',
							icon: 'success',
						});
					},10);  
					window.setTimeout(function(){ 
						window.location.replace('daftar-user');
					},1500);
				</script>
			";
   }
?>
<script src="../../package/sweetalert2.all.min.js"></script>