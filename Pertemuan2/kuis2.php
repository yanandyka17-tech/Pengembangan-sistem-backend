
<?php
function hitungNilaiAkhir($tugas, $uts, $uas) {
    return ($tugas * 0.30)
         + ($uts * 0.30)
         + ($uas * 0.40);
}

$tugas = 80;
$uts = 80;
$uas = 87.5;

$nilaiAkhir = hitungNilaiAkhir($tugas, $uts, $uas);

if ($nilaiAkhir >= 70) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

echo "Nilai Akhir: " . $nilaiAkhir . "<br>";
echo "Status: " . $status;
?>
