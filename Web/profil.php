<?php

	switch (@$_GET['act']) {
		default:
?>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<br>
					<font size="4"><b>Data Profil Para Karyawan</b></font>
				</div>
				<div class="panel-body">
					 <table class="table table-stripped table-warning">
  						<thead>
    						<tr>
      							<th scope="col">No.</th>
      							<th scope="col">ID Karyawan</th>
      							<th scope="col">Nama Karyawan</th>
      							<th scope="col">Jenis Kelamin</th>
      							<th scope="col">Alamat</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Email</th>
      							<th scope="col">Nomor Telepon</th>
      							<th scope="col">Jabatan</th>
      							<th scope="col">Status</th>
    						</tr>
  						</thead>
  						<tbody>
  							<?php
  								$no = 1;
  								$sql = "SELECT * FROM tabel_karyawan";
  								$result = mysqli_query($koneksi, $sql);
  								while ($data = mysqli_fetch_array($result)) {
  							?>
  									<tr>
  										<td><?php echo $no++; ?></td>
  										<td><?php echo $data['id_karyawan']; ?></td>
  										<td><?php echo $data['nama_karyawan']; ?></td>
  										<td><?php echo $data['jenis_kelamin']; ?></td>
  										<td><?php echo $data['alamat']; ?></td>
                      <td><?php echo $data['umur']; ?></td>
                      <td><?php echo $data['email']; ?></td>
  										<td><?php echo $data['no_hp']; ?></td>
  										<td><?php echo $data['jabatan']; ?></td>
  										<td><?php echo $data['status']; ?></td>
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
			# code...
			break;

		case 'ubah':
			# code...
			break;
		
		case 'hapus':
			# code...
			break;
	}

?>