<?php
    require "fungsi.php";
    $qmahasiswa = "SELECT * FROM mahasiswa";
    $mahasiswas = tampilandata($qmahasiswa);
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style1.css?v=1">
        <meta charset="UTF-8">
        <title>DATA MAHASISWA INFORMATIKA 2026</title>
    </head>
    <body>
        <div class="container">
            <h1>Data Mahasiswa Informatika 2026</h1>
            <a href="tambahdata.php">
                <button>tambah data</button>
            </a>
            <table border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td><a href="index1.php">Home</a></td>
                    <td><a href="profile.php">Profile</a></td>
                    <td><a href="contact.php">Contact</a></td>
                    <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
                </tr>
            </table>
            <hr/>
            <table border="1" cellpadding="10px">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>JURUSAN</th>
                    <th>NIM</th>
                    <th>NO HP</th>
                    <th>EMAIL</th>
                    <th>FOTO</th>
                    <th>AKSI</th>
                </tr>
                <?php
                $i = 1;
                foreach($mahasiswas as $mhs) { 
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $mhs[1]; ?></td> <td><?php echo $mhs[3]; ?></td> <td><?php echo $mhs[2]; ?></td> <td><?php echo $mhs[5]; ?></td> <td><?php echo $mhs[4]; ?></td> <td><img src="aset/img/<?php echo $mhs[6]; ?>" alt="foto" width="60px"></td>
                    <td>
                        <a href="editedata.php"><button>edit</button></a> | 
                        <a href="deletdata.php"><button>hapus</button></a>
                    </td>
                </tr>
                <?php
                $i++;
                }
                ?>
            </table>
            
            <a href="profile.php">Profile</a>
            <a href="contact.php">Contact</a>

            <a href="https://Youtube.com" target="_blank">Youtube</a>
            <br>
            <hr>
        </div>
    </body>
</html>