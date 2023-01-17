<?php
   require "koneksi.php";

      // Input text KodeBIO, Nama, dan Jenis Kelamin
      $idGuru = $_POST['id_guru'];
      $InputNama = $_POST['nama_guru'];
      $InputNip = $_POST['nip'];
      $ChooseKL = $_POST['jenis_kelamin'];
      $InputTgl = $_POST['tgl_lahir'];
      $InputAla = $_POST['alamat'];
      $InputPs = $_POST['password_guru'];
      $InputHp = $_POST['no_hp'];
      $InputMpl = $_POST['id_mapel'];
      $InputAdm = $_POST['id_admin'];
      
      if (empty($InputNama) || empty($InputNip) || empty($ChooseKL) || empty($InputTgl) || empty($InputAla) || empty($InputPs) || empty($InputHp) || empty($InputMpl) || empty($InputAdm)) {
         echo "
            <script>
               alert('Mohon lengkapi seluruh data!');
               document.location.href = '../tables/tambah-data.php';
            </script>
         ";
      }
      else {
         mysqli_query($koneksi, "UPDATE tbl_guru SET nama_guru = '$InputNama', nip = '$InputNip', jenis_kelamin = '$ChooseKL', tgl_lahir = '$InputTgl', alamat = '$InputAla', password_guru = '$InputPs', no_hp = '$InputHp', id_mapel = '$InputMpl', id_admin = '$InputAdm' where id_guru = '$idGuru'");
         echo "
               <script>
                  setTimeout(function() { 
                     Swal.fire({
                        title: 'Berhasil memperbarui data!',
                        text: 'Anda masuk ke halaman guru',
                        icon: 'success',
                     });
                  },10);  
                  window.setTimeout(function(){ 
                     window.location.replace('../tables/daftar-guru.php');
                  },1500);
               </script>
            ";
      }
   
?>
<script src="../../package/sweetalert2.all.min.js"></script>