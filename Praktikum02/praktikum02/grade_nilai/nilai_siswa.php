<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['uts'];
$nilai_uas = $_POST['uas'];
$nilai_tugas = $_POST['tugas'];
$nilai_akhir = (30*$nilai_uts/100 + 35*$nilai_uas/100 + 35*$nilai_tugas/100);



if(!empty($proses)){
    echo 'proses : '.$proses;
    echo '</br>Nama : '.$nama_siswa;
    echo '<br>Mata Kuliah : '.$mata_kuliah;
    echo '</br>Nilai UTS : '.$nilai_uts;
    echo '</br>Nilai UAS : '.$nilai_uas;
    echo '</br>NIlai Tugas Praktikum : '.$nilai_tugas;
    echo '</br>Nilai Total : '.number_format($nilai_akhir,2,',','.');
    


    echo '</br>';
    if($nilai_akhir <= 35){
        $grade='E';
        echo 'Grade Anda E';
    }elseif($nilai_akhir <= 55){
        $grade='D';
        echo 'Grade Anda D';
    }elseif($nilai_akhir <= 69){
        $grade='C';
        echo 'Grade Anda C';
    }elseif($nilai_akhir <= 84){
        $grade='B';
        echo 'Grade Anda B';
    }elseif($nilai_akhir <= 100){
        $grade='A';
        echo 'Grade Anda A';
    }else {
        $grade='I';
        echo 'Grade Anda I';
    }



    switch($grade){
        case 'E':
            echo '</br>Sangat Kurang';
            break;
        case 'D':
            echo '</br>Kurang';
            break;
        case 'C':
            echo '</br>Cukup';
            break;
        case 'B':
            echo '</br>Memuaskan';
            break;
        case 'A':
            echo '</br>Sangat Memuaskan';
            break;
        case 'I':
            echo '</br>Tidak Ada';
            break;
    }



    echo '</br>';
    if($nilai_akhir > 55){
        echo 'Mahasiswa dinyatakan LULUS!';
    }else {
        echo 'Mahasiswa dinyatakan TIDAK LULUS!';
    }
}

?>