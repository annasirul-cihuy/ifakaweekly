<?php
    if (!isset($_GET["id"])) {
    echo "<script>alert('Pilih data yang mau diedit terlebih dahulu!'); document.location.href='mahasiswa.php';</script>";
    exit;
    }

    require_once "fungsi.php";

        // 1. Ambil ID dari URL yang dikirim oleh mahasiswa.php
        $id = $_GET["id"];

        // 2. Query data mahasiswa berdasarkan ID tersebut
        $qmahasiswa = "SELECT * FROM mahasiswa WHERE id = $id";
        $mahasiswas = tampilandata($qmahasiswa);
        $mhs = $mahasiswas[0]; // Ambil baris pertama data

        // 3. Cek apakah tombol Simpan Perubahan sudah diklik
        if (isset($_POST["submit"])) {
    
        // Panggil fungsi ubahdata dan cek statistiknya
        if (ubahdata($_POST) > 0) {
        echo "
            <script>
                alert('Data mahasiswa berhasil diubah!');
                document.location.href = 'mahasiswa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah atau tidak ada perubahan data.');
                document.location.href = 'mahasiswa.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>  
    <link rel="stylesheet" href="style1.css?v=1">
    <meta charset="UTF-8">
    <title>UBAH DATA MAHASISWA</title>
</head>
<body>
    <div class="container">
        <h1>Ubah Data Mahasiswa</h1>
        <hr>
        
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $mhs[0]; ?>">

            <table cellpadding="10px">
                <tr>
                    <td><label for="nama">NAMA :</label></td>
                    <td><input type="text" name="nama" id="nama" value="<?= $mhs[1]; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="jurusan">JURUSAN :</label></td>
                    <td><input type="text" name="jurusan" id="jurusan" value="<?= $mhs[3]; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="nim">NIM :</label></td>
                    <td><input type="text" name="nim" id="nim" value="<?= $mhs[2]; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="nohp">NO HP :</label></td>
                    <td><input type="text" name="nohp" id="nohp" value="<?= $mhs[5]; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="email">EMAIL :</label></td>
                    <td><input type="email" name="email" id="email" value="<?= $mhs[4]; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="foto">NAMA FILE FOTO :</label></td>
                    <td>
                        <input type="text" name="foto" id="foto" value="<?= $mhs[6]; ?>" required>
                        <br><small style="color: gray;">Contoh: nama_file.png (Pastikan filenya ada di folder aset/img/)</small>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="submit">Simpan Perubahan</button>
                        <a href="mahasiswa.php"><button type="button">Batal</button></a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>