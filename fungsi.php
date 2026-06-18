<?php
    $koneksi = mysqli_connect("localhost","root","root","ifakaweekly");

    function tampilandata($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi,$query);

        $rows =[];
        while($row = mysqli_fetch_row($result))
        {
            $rows[] = $row;
        }

        return $rows;
    }
    function hapusdata($id)
    {
        global $koneksi;  
    
        $query = "DELETE FROM mahasiswa WHERE id=$id";

        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi);
    }
    function ubahdata($data) 
    {
        global $koneksi; // <-- UBAH INI

            $id = $data["id"];
            $nama = htmlspecialchars($data["nama"]);
            $jurusan = htmlspecialchars($data["jurusan"]);
            $nim = htmlspecialchars($data["nim"]);
            $nohp = htmlspecialchars($data["nohp"]);
            $email = htmlspecialchars($data["email"]);
            $foto = htmlspecialchars($data["foto"]);

            $query = "UPDATE mahasiswa SET
                nama = '$nama',
                jurusan = '$jurusan',
                nim = '$nim',
                no_hp = '$nohp',
                email = '$email',
                foto = '$foto'
              WHERE id = $id";

        mysqli_query($koneksi, $query); // <-- UBAH INI
        return mysqli_affected_rows($koneksi); // <-- UBAH INI
    }


?>