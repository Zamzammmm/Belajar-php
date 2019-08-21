<?php
    $nama = 'Zamzam Ubaidilah';
    $kelas = 'XI RPL 1';
    $nb = 80;
    $nm = 70;
    $rta = ($nb+$nm)/2;
    $ket1 = 'LULUS';
    $g1 = 'A';
    $g2 = 'B';
    $g3 = 'C';
    $g4 = 'D';

    echo "<hr>";
    echo "Nama : <b>$nama</b>"."<br>";
    echo "Kelas : <b>$kelas</b>"."<br>";
    echo "<hr><br>";

    if ($nb <= 100) {
    echo "Nilai Bhs.Indonesia : <b>$nb</b>"."<br>";
    }
    else {
        echo "Maaf Nilai Yang Anda Masukkan Tidak Sesuai"."<br>";
    }

    if ($nb <= 100) {
        echo "Nilai Matematika : <b>$nm</b>"."<br>";
        }
        else {
            echo "Maaf Nilai Yang Anda Masukkan Tidak Sesuai"."<br>";
        }
        if ($nb <= 100) {
            echo "Nilai Rata-rata : <b>$rta</b>"."<br>";
        }
        else {
            echo "Maaf Nilai Tidak Sesuai"."<br>";
        }
        if ($rta >= 100) {
            echo "Maaf Nilai Yang Anda Masukan Tidak Sesuai"."<br>";
        }
        elseif ($rta <= 0) {
            echo "Maaf Nilai Yang Anda Masukan Tidak Sesuai"."<br>";
        }
        if ($rta >= 100) {
            echo "Maaf Nilai Yang Anda Masukan Tidak Sesuai"."<br>";
        }
        elseif ($rta > 85) {
            echo "Grade : <b>$g1</b>"."<br>";
        }
        elseif ($rta >= 75) {
            echo "Grade : <b>$g2</b>"."<br>";
        }
        elseif ($rta >= 60) {
            echo "Grade : <b>$g3</b>"."<br>";
        }
        elseif ($rta <= 0) {
            echo "Maaf Nilai Yang Anda Masukan Tidak Sesuai"."<br>";
        }
        elseif ($rta < 60) {
            echo "Grade : <b>$g4</b>"."<br>";
        }
?>