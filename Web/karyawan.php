<?php

	switch (@$_GET['act']) {
		default:

?>

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

			<div class="panel panel-primary">
				<div class="panel-heading">
					<br>
					<font size="4"><b>Data Profil Para Karyawan</b></font>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="?page=karyawan&act=tambah">
                  <i class="fas fa-plus" aria-hidden="true">Tambah Data Karyawan</i>
              </a>
          </div>
				</div>
				<div class="panel-body">
					 <table class="table table-stripped table-secondary">
  						<thead>
    						<tr>
      							<th scope="col">No.</th>
      							<th scope="col">ID Karyawan</th>
      							<th scope="col">Nama Karyawan</th>
                    <th scope="col">Jabatan</th>
      							<th scope="col">Jenis Kelamin</th>
      							<th scope="col">Alamat</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Email</th>
      							<th scope="col">Nomor Telepon</th>
                    <th scope="col">Action</th>
    						</tr>
  						</thead>
  						<tbody>
  							<?php

                  include "koneksi.php";
  								$no = 1;
  								$sql = "SELECT * FROM tabel_karyawan";
  								$result = mysqli_query($koneksi, $sql);
  								while ($data = mysqli_fetch_array($result)) {
  							?>
  									<tr>
  										<td><?php echo $no++; ?></td>
  										<td><?php echo $data['id_karyawan']; ?></td>
  										<td><?php echo $data['nama_karyawan']; ?></td>
                      <td><?php echo $data['jabatan']; ?></td>
  										<td><?php echo $data['jenis_kelamin']; ?></td>
  										<td><?php echo $data['alamat']; ?></td>
                      <td><?php echo $data['umur']; ?></td>
                      <td><?php echo $data['agama']; ?></td>
                      <td><?php echo $data['email']; ?></td>
  										<td><?php echo $data['no_hp']; ?></td>
                      <td>
                        <a href="?page=karyawan&act=ubah&id=<?php echo $data['id_karyawan']; ?>">
                          <i class="fas fa-edit" aria-hidden="true"></i>
                        </a>
                        <a onclick="return confirm('Yakin nih Mau Di Hapus, Ntar Nyesal Loh...?')" href="?page=karyawan&act=hapus&id=<?php echo $data['id_karyawan']; ?>">
                          <i class="fas fa-trash" aria-hidden="true"></i>
                        </a>
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
          <font size="4"><b>Halaman Untuk Menambah Data Karyawan</b></font>
        </div>
        <div class="panel-body">
          <form name="frmInput" method="POST" action="">
            <table class="table table-stripped table-secondary">
                <tr>
                  <td>ID Karyawan</td>
                  <td>
                    <input type="text" class="form-control" name="txtID" placeholder="ID Karyawan" maxlength="10" required>
                  </td>
                </tr>
                <tr>
                  <td>Nama Karyawan</td>
                  <td>
                    <input type="text" class="form-control" name="txtNama" placeholder="Nama Karyawan" required>
                  </td>
                </tr>
                <tr>
                  <td>Jabatan</td>
                  <td>
                    <input type="text" name="txtJabatan"  class="form-control" placeholder="Jabatan" required>
                  </td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>
                      <input type="radio" name="txtJK" value="Pria" required>Pria
                      <input type="radio" name="txtJK" value="Wanita" required>Wanita
                  </td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>
                    <textarea class="form-control" name="txtAlamat" placeholder="Isi Alamat Anda Disini..."></textarea>
                  </td>
                </tr>
                
                <tr>
                  <td>Umur</td>
                  <td>
                    <input type="number" class="form-control" name="numUmur" placeholder="Umur" required>
                  </td>
                </tr>
                <tr>
                  <td>Agama</td>
                  <td>
                    <input type="radio" name="txtAgama" value="Islam" required>Islam
                    <input type="radio" name="txtAgama" value="Kristen" required>Kristen
                    <br>
                    <input type="radio" name="txtAgama" value="Katolik" required>Katolik
                    <input type="radio" name="txtAgama" value="Hindu" required>Hindu
                    <br>
                    <input type="radio" name="txtAgama" value="Buddha" required>Buddha
                    <input type="radio" name="txtAgama" value="Konghucu" required>Konghucu
                  </td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>
                    <textarea class="form-control" name="txtEmail" placeholder="Isi Email Anda Disini..."></textarea>
                  </td>
                </tr>
                <tr>
                  <td>No Handphone</td>
                  <td>
                    <input type="text" class="form-control" name="txtNo" placeholder="Nomor Handphone" maxlength="13" required>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <button type="submit" class="btn-primary" name="btnTambah">
                        <i class="fas fa-plus">
                            <h7>Create</h7>
                        </i>
                    </button>
                    <button type="button" class="btn-light" name="btnReset">
                        <a href="?page=karyawan">
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
      
      if (isset($_POST['btnTambah'])) {
              $id_karyawan = $_POST['txtID'];
              $nama_karyawan = $_POST['txtNama'];
              $jabatan = $_POST['txtJabatan'];
              $jenis_kelamin = $_POST['txtJK'];
              $alamat = $_POST['txtAlamat'];
              $umur = $_POST['numUmur'];
              $agama = $_POST['txtAgama'];
              $email = $_POST['txtEmail'];
              $no_hp = $_POST['txtNo'];

              $query = "INSERT INTO tabel_karyawan VALUES('$id_karyawan', '$nama_karyawan', '$jabatan', '$jenis_kelamin', '$alamat', '$umur', '$agama', '$email', '$no_hp')";
              mysqli_query($koneksi, $query);
            }

			break;

		case 'ubah':
			
      $id = @$_GET['id'];
      $query = "SELECT * FROM tabel_karyawan WHERE id_karyawan = '$id'";
      $result = mysqli_query($koneksi, $query);
      while ($data = mysqli_fetch_array($result)) {
          $nama_karyawan = $data['nama_karyawan'];
          $jabatan = $data['jabatan'];
          $jenis_kelamin = $data['jenis_kelamin'];
          $alamat = $data['alamat'];
          $umur = $data['umur'];
          $agama = $data['agama'];
          $email = $data['email'];
          $no_hp = $data['no_hp'];
      }

?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      
    <div class="panel panel-default">
        <div class="panel-heading">
          <br>
          <font size="4"><b>Form Untuk Mengedit Profil</b></font>
        </div>
        <div class="panel-body">
          <form name="frmInput" method="POST" action="">
            <table class="table table-stripped table-secondary">
                <tr>
                  <td>ID Karyawan</td>
                  <td>
                    <input type="text" class="form-control" name="txtID" value="<?php echo $id; ?>" readonly>
                  </td>
                </tr>
                <tr>
                  <td>Nama Karyawan</td>
                  <td>
                    <input type="text" class="form-control" name="txtNama" value="<?php echo $nama_karyawan; ?>" required>
                  </td>
                </tr>
                <tr>
                  <td>Jabatan</td>
                  <td>
                    <input type="text" name="txtJabatan"  class="form-control" value="<?php echo $jabatan; ?>" required>
                  </td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>
                      <input type="radio" name="txtJK" value="Pria" required>Pria
                      <input type="radio" name="txtJK" value="Wanita" required>Wanita
                  </td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>
                    <textarea class="form-control" name="txtAlamat" value="<?php echo $alamat; ?>"></textarea>
                  </td>
                </tr>
                
                <tr>
                  <td>Umur</td>
                  <td>
                    <input type="number" class="form-control" name="numUmur" value="<?php echo $umur; ?>" required>
                  </td>
                </tr>
                <tr>
                  <td>Agama</td>
                  <td>
                    <input type="radio" name="txtAgama" value="Islam" required>Islam
                    <input type="radio" name="txtAgama" value="Kristen" required>Kristen
                    <br>
                    <input type="radio" name="txtAgama" value="Katolik" required>Katolik
                    <input type="radio" name="txtAgama" value="Hindu" required>Hindu
                    <br>
                    <input type="radio" name="txtAgama" value="Buddha" required>Buddha
                    <input type="radio" name="txtAgama" value="Konghucu" required>Konghucu
                  </td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>
                    <textarea class="form-control" name="txtEmail" value="<?php echo $email; ?>"></textarea>
                  </td>
                </tr>
                <tr>
                  <td>No Handphone</td>
                  <td>
                    <input type="text" class="form-control" name="txtNo" value="<?php echo $no_hp; ?>" required>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <button type="submit" class="btn-primary" name="btnEdit">
                        <i class="fas fa-save">
                            <h7>Save</h7>
                        </i>
                    </button>
                    <button type="button" class="btn-light" name="btnReset">
                        <a href="?page=karyawan">
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
            }
?>

<?php
			break;


		case 'hapus':
			
      $id = $_GET['id'];
      $query = "DELETE FROM tabel_karyawan WHERE id_karyawan = '$id'";
      mysqli_query($koneksi, $query);
      header('location:?page=karyawan');

			break;
	}

?>