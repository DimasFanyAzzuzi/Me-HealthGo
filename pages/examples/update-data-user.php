<?php
   require "koneksi.php";

      // Input text KodeBIO, Nama, dan Jenis Kelamin
      $id = $_POST['id_user'];
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
               document.location.href = 'edit-data-user';
            </script>
         ";
      }
      else {
         mysqli_query($koneksi, "UPDATE user SET username = '$InputUs', jenis_kelamin = '$InputJk', umur = '$InputUm', asal_sekolah = '$InputAs', name = '$InputNam', password = '$InputPs', role = '$InputR' where id_user = '$id'");
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
                     window.location.replace('daftar-user');
                  },1500);
               </script>
            ";
      }
   
?>
<script src="../../package/sweetalert2.all.min.js"></script>