<?php

	switch (@$_GET['absen']) {
		default:
?>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

      <div class="panel panel-primary">
        <div class="panel-heading">
          <br>
          <font size="4"><b>Halaman Untuk Melakukan Absensi</b></font>
           <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="?page=absen&absen=tambah">
                  <i class="fas fa-plus" aria-hidden="true">Tambah Data Absen</i>
              </a>
          </div>
        </div>
        <div class="panel-body">
           <table class="table table-stripped table-secondary">
              <thead>
                <tr>
                    <th scope="col">Status</th>
                    <th scope="col">ID Absensi</th>
                    <th scope="col">ID Karyawan</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Absen Masuk</th>
                    <th scope="col">Absen Keluar</th>
                </tr>
              </thead>
              <tbody>
                  <?php

                      $number = 1;
                      $mysql = "SELECT * FROM tabel_absensi";
                      $finnaly = mysqli_query($koneksi, $mysql);
                      while ($file = mysqli_fetch_array($finnaly)) {
                      
                  ?>

                  <tr>
                      <td><?php echo $number++; ?></td>
                      <td><?php echo $file['id_absensi']; ?></td>
                      <td><?php echo $file['id_karyawan']; ?></td>
                      <td><?php echo $file['nama_karyawan']; ?></td>
                      <td><?php echo $file['keterangan']; ?></td>
                       <td><?php echo date('j F Y'); ?></td>
                      <td>
                        <button data-bs-toggle="button" autocomplete="off" class="btn-outline-success" type="button" onclick='alert("Selamat <?php echo $file['nama_karyawan'] ?> Telah Berhasil Melakukan Absen Masuk")' href='#'>Absen Masuk</button>
                      </td>
                      <td>
                        <button data-bs-toggle="button" autocomplete="off" class="btn-outline-warning" type="button" onclick='alert("Selamat <?php echo $file['nama_karyawan'] ?> Telah Berhasil Melakukan Absen Keluar")' href='#'>Absen Keluar</button>
                      </td>
                  </tr>

                  <?php
                        }
                  ?>

              </tbody>
            </table>
          </div>
        </div>

<?php
      break;

    case 'tambah':
      
      ?>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      
    <div class="panel panel-default">
        <div class="panel-heading">
          <br>
          <font size="4"><b>Halaman Untuk Menambah Data Absen</b></font>
        </div>
        <div class="panel-body">
          <form name="frmInput" method="POST" action="">
            <table class="table table-stripped table-secondary">
                <tr>
                  <td>ID Absensi</td>
                  <td>
                    <input type="text" class="form-control" name="txtAbsen" placeholder="ID Absensi" maxlength="10" required>
                  </td>
                </tr>
                <tr>
                  <td>ID Karyawan</td>
                  <td>
                    <input type="text" class="form-control" name="txtID" placeholder="ID Karyawan" maxlength="10" required>
                  </td>
                </tr>
                <tr>
                  <td>Nama Karyawan</td>
                  <td>
                    <input type="text" name="txtNama"  class="form-control" placeholder="Nama Karyawan" required>
                  </td>
                </tr>
                <tr>
                  <td>Keterangan</td>
                  <td>
                    <textarea class="form-control" name="txtKet" placeholder="Isi Keterangan Data Absensi Disini...!!!"></textarea>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <button type="submit" class="btn-primary" name="btntambah">
                        <i class="fas fa-plus">
                            <h7>Create</h7>
                        </i>
                    </button>
                    <button type="button" class="btn-light" name="btnback">
                        <a href="?page=absen">
                        <i class="fas fa-backward">
                          <h7>Back</h7>
                        </i>
                    </button>
                  </td>
                </tr>
            </table>
        </form>
        </div>
    </div>

<?php
      
      if (isset($_POST['btntambah'])) {
              $id_absensi = $_POST['txtAbsen'];
              $id_karyawan = $_POST['txtID'];
              $nama_karyawan = $_POST['txtNama'];
              $keterangan = $_POST['txtKet'];

              $query = "INSERT INTO tabel_absensi VALUES('$id_absensi', '$id_karyawan', '$nama_karyawan', '$keterangan')";
              mysqli_query($koneksi, $query);
            }
      break;

    case 'hapus':
      # code...
      break;

    }
?>

      