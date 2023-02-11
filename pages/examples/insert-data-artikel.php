<?php
   require "koneksi.php";
   // Input text KodeBIO, Nama, dan Jenis Kelamin
   $InputKat = $_POST['id_kategori'];
   $InputJud = $_POST['judul'];
   $InputDes = $_POST['deskripsi'];
   $InputTgl = $_POST['created_at'];

   if (empty($InputKat) || empty($InputJud) || empty($InputDes) || empty($InputTgl)) {
      echo "
         <script>
            alert('Mohon lengkapi seluruh data!');
            document.location.href = 'tambah-data-artikel';
         </script>
      ";
   }
   // else if (empty($InputNama)) {
   //    echo "
   //       <script>
   //          alert('Nama belum diisi!');
   //          document.location.href = '../examples/tambah-data.php';
   //       </script>
   //    ";
   // }
   // else if (empty($ChooseKL)) {
   //    echo "
   //       <script>
   //          alert('Jenis kelamin belum diisi!');
   //          document.location.href = '../form-biodata.php';
   //       </script>
   //    ";
   // }
   // else if (empty($InputNip)) {
   //    echo "
   //       <script>
   //          alert('Profesi belum diisi!');
   //          document.location.href = '../form-biodata.php';
   //       </script>
   //    ";
   // }
   
   else {
      mysqli_query($koneksi, "INSERT INTO artikel (id_kategori, judul, deskripsi, created_at) VALUES ('$InputKat','$InputJud','$InputDes','$InputTgl')");
      echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Berhasil menambahkah data!',
							text: 'Anda masuk ke halaman daftar artikel',
							icon: 'success',
						});
					},10);  
					window.setTimeout(function(){ 
						window.location.replace('artikel');
					},1500);
				</script>
			";
   }
?>
<script src="../../package/sweetalert2.all.min.js"></script>