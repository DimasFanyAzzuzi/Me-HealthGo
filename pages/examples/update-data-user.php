<?php
   require "koneksi.php";

      // Input text KodeBIO, Nama, dan Jenis Kelamin
      $id = $_POST['id_user'];
      $InputNam = $_POST['name'];
      $InputUs = $_POST['username'];
      $InputPs = $_POST['password'];
      $InputR = $_POST['role'];
      
   if (empty($InputNam) || empty($InputUs) || empty($InputPs) || empty($InputR)) {
         echo "
            <script>
               alert('Mohon lengkapi seluruh data!');
               document.location.href = 'edit-data-user.php';
            </script>
         ";
      }
      else {
         mysqli_query($koneksi, "UPDATE user SET username = '$InputUs', name = '$InputNam', password = '$InputPs', role = '$InputR' where id_user = '$id'");
         echo "
               <script>
                  setTimeout(function() { 
                     Swal.fire({
                        title: 'Berhasil memperbarui data!',
                        text: 'Anda masuk ke halaman daftar user',
                        icon: 'success',
                     });
                  },10);  
                  window.setTimeout(function(){ 
                     window.location.replace('daftar-user.php');
                  },1500);
               </script>
            ";
      }
   
?>
<script src="../../package/sweetalert2.all.min.js"></script>