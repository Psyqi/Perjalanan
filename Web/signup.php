<!DOCTYPE html>
<html>
    <head>

        <title>Sistem Absensi</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="tampilan/signup.css">

    </head>
    <body>

        

        <br>

        <h1>Sistem Absensi</h1>
        <br>
        <h2>Halaman Untuk Daftar Bagi Pengguna Yang Tidak Memiliki Akun User</h2>

        <div class="kotak_login">
            <p class="tulisan_login">Silahkan Daftar</p>
            <form method="post" action="simpan.php">
                <table>
                    <tr>
                        <td>ID Karyawan</td>
                        <td>
                            <input type="text" class="from_daftar" onkeyup="isi_otomatis()" name="id_karyawan" placeholder="..." maxlength="10" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Karyawan </td>
                        <td>
                            <input type="text" class="from_daftar" name="nama_karyawan" placeholder="..." required>
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input type="text" class="from_daftar" name="username" placeholder="..." required maxlength="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" class="from_daftar" name="password" placeholder="..." required>
                        </td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>
                            <input type="radio" name="level" value="admin">Admin
                            <input type="radio" name="level" value="user">User
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <br>
                            <button type="submit" class="tombol_simpan" value="simpan">Simpan</button>
                        </td>
                    </tr>
                </table>
                <br>
                <center>
                    <a class="link" href="index.php">Back</a>
                </center>
            </form>
        </div>
    </body>

</html>