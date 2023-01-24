<?php
   require "koneksi.php";
   // Input text KodeBIO, Nama, dan Jenis Kelamin
   $InputId = $_POST['id_artikel'];

   // Input File
   $ChooseFoto = strtolower($_FILES['nama_gambar']['name']); // Mengambil nama file
   $Patch = $_FILES['nama_gambar']['tmp_name']; // Mengambil lokasi file
   $CheckInput = $_FILES['nama_gambar']['error']; // Mengambil bentuk error ketika upload file
   $CheckSize = $_FILES['nama_gambar']['size']; // Mengambil ukuran file yang di-upload
   
   // Menampung lokasi pemindahan file ke dalam variabel $MoveTO
   $MoveTO = "../../assets/img/img-artikel/";
   
   // Membatasi valid extension file yang boleh diinput
   $ValidExt = ["jpg", "jpeg", "png"]; // Menampung valid extension dalam array
   $GetNameFile = explode(".", $ChooseFoto); // Memisah nama file untuk mengambil ekstensi file 
   $GetExt = end($GetNameFile); // Mengambil ekstensi file

   // Membuat nama unik untuk file upload supaya tidak terduplikasi
   $GetKodeBIO = uniqid(); // Mengambil kode bio otomatis dari file auto-code
   $SetUniqName = $GetKodeBIO; // Membuat variabel baru untuk menampung kode bio
   $SetUniqName .= "-"; // Menggabungkan kode bio dengan tanda (-)
   $SetUniqName .= $ChooseFoto; // Menggabungkan kode bio dan tanda (-) dengan nama file

   if (empty($InputId)) {
      echo "
         <script>
            alert('Mohon lengkapi seluruh data!');
            document.location.href = 'tambah-data-gambar-artikel';
         </script>
      ";
   }
   else if ($CheckInput === 4) {
      echo "
         <script>
            alert('File foto masih belum diisi!');
            document.location.href = 'tambah-data-gambar-artikel';
         </script>
      ";
   }
   else if (!in_array($GetExt, $ValidExt)) {
      echo "
         <script>
            alert('Ekstensi file yang diperbolehkan hanya (JPG, JPEG, PNG)!');
            document.location.href = 'tambah-data-gambar-artikel';
         </script>
      ";
   }
   else if ($CheckSize > 6000000) {
      echo "
         <script>
            alert('Ukuran file terlalu besar, MAX (6 MB)!');
            document.location.href = 'tambah-data-gambar-artikel';
         </script>
      ";
   }
   else {
      move_uploaded_file($Patch, $MoveTO.$SetUniqName);
      mysqli_query($koneksi, "INSERT INTO gambar_artikel (id_artikel, nama_gambar) VALUES ('$InputId', '$SetUniqName')");
      echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Berhasil menambahkah data!',
							text: 'Anda masuk ke halaman Daftar Gambar',
							icon: 'success',
						});
					},10);  
					window.setTimeout(function(){ 
						window.location.replace('gambar-artikel');
					},1500);
				</script>
			";
   }
?>
<script src="../../package/sweetalert2.all.min.js"></script>