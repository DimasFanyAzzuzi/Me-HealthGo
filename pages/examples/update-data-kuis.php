<?php
   require "koneksi.php";

      // Input text KodeBIO, Nama, dan Jenis Kelamin
      $id = $_POST['id_kuisioner'];
      $InputP = $_POST['pertanyaan'];
      
   if (empty($InputP)) {
         echo "
            <script>
               alert('Mohon lengkapi seluruh data!');
               document.location.href = 'edit-data-kuis';
            </script>
         ";
      }
      else {
         mysqli_query($koneksi, "UPDATE kuisioner SET pertanyaan = '$InputP' where id_kuisioner = '$id'");
         echo "
               <script>
                  setTimeout(function() { 
                     Swal.fire({
                        title: 'Berhasil memperbarui data!',
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