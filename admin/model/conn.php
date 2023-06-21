<?php

$koneksi = new mysqli('localhost', 'root', '', 'mfep_radio');

class conn
{
    function ambilData($query)
    {
        global $koneksi;

        $ambil = mysqli_query($koneksi, $query);
        $hasil = [];

        while ($pecah = mysqli_fetch_assoc($ambil)) {
            $hasil[] = $pecah;
        }

        return $hasil;
    }
}
