<?php

    require "fungsi";
    $id = $_GET["id"];
    $query = "DELETE FROM mahasiswa WHERE id =$id";
    mysqli_query($koneksi,$query);

    if (hapusdata($id) > 0 )
    {
        echo "<script>
            alert('Data berhasil ditambahkan!');
            window.location.href='mahasiswa.php';
            </script>";
    }
?>