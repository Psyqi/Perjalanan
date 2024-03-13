<?php

            include "koneksi.php";

            if (isset($_POST['btnEdit'])) {
              $id_karyawan = $_POST['txtID'];
              $nama_karyawan = $_POST['txtNama'];
              $jabatan = $_POST['txtJabatan'];
              $jenis_kelamin = $_POST['txtJK'];
              $alamat = $_POST['txtAlamat'];
              $umur = $_POST['numUmur'];
              $agama = $_POST['txtAgama'];
              $email = $_POST['txtEmail'];
              $no_hp = $_POST['txtNo'];

              $query = "UPDATE tabel_karyawan SET nama_karyawan = '$nama_karyawan', jabatan = '$jabatan', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', umur = '$umur', agama = '$agama', email = '$email', no_hp = '$no_hp' WHERE id_karyawan = '$id_karyawan'";

              mysqli_query($koneksi, $query);
              header('location:karyawan.php');
            }
?>