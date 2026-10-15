<?php

function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilai_akhir = (0.3 * $tugas) + (0.3* $uts) + (0.4 * $uas);
    
    echo "output : <br>";
    echo "Nilai Akhir : " . $nilai_akhir . "<br>";

    if ($nilai_akhir >= 70) {
        echo "status : Lulus";
    } else {
        echo "status : Tidak Lulus";
    }
}
hitungNilaiAkhir (90, 80, 80);
?>