<?php
   require "koneksi.php";

      // Input text KodeBIO, Nama, dan Jenis Kelamin
      $id = $_POST['id_artikel'];
      $InputKat = $_POST['id_kategori'];
      $InputJud = $_POST['judul'];
      $InputDes = $_POST['deskripsi'];
      
   if (empty($InputKat) || empty($InputJud) || empty($InputDes)) {
         echo "
            <script>
               alert('Mohon lengkapi seluruh data!');
               document.location.href = 'edit-data-artikel';
            </script>
         ";
      }
      else {
         mysqli_query($koneksi, "UPDATE artikel SET id_kategori = '$InputKat', judul = '$InputJud', deskripsi = '$InputDes' where id_artikel = '$id'");
         echo "
               <script>
                  setTimeout(function() { 
                     Swal.fire({
                        title: 'Berhasil memperbarui data!',
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