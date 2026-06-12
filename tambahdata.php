<?php
    require "fungsi.php";

    // Cek apakah form telah disubmit
    if (isset($_POST["submit"])) 
    {
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $jurusan = $_POST["jurusan"];
        $email = $_POST["email"];
        $nohp = $_POST["no_hp"];
        $foto = $_POST["foto"]; 

        $query = "INSERT INTO mahasiswa 
                  (nama, nim, jurusan, email, no_hp, foto) 
                  VALUES 
                  ('$nama', '$nim', '$jurusan', '$email', '$nohp', '$foto')";

        if (mysqli_query($koneksi, $query)) {
            echo "<script>
            alert('Data berhasil ditambahkan!');
            window.location.href='mahasiswa.php';
            </script>";
        } else {
            echo "<script>alert('Gagal menambahkan data: " . mysqli_error($koneksi) . "');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <div class="container">
    <h2>Tambah Data Mahasiswa Informatika 2026</h2>
    
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="nim">NIM:</label></td>
                <td><input type="number" id="nim" name="nim" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email"required></td>
            </tr>
            <tr>
                <td><label for="no_hp">No HP:</label></td>
                <td><input type="tel" id="no_hp" name="no_hp"></td>
            </tr>
            <tr>
                <td><label for="foto">Nama File Foto:</label></td>
                <td><input type="text" id="foto" name="foto"></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan:</label></td>
                <td>
                    <select id="jurusan" name="jurusan">
                        <option value="Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <button type="submit" name="submit">Simpan dan Tambahkan Data</button>
    </form>
</div>
</body>
</html>