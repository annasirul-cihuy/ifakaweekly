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




?>