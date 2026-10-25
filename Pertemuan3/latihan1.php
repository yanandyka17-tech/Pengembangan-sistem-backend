<?php
class mahasiswa{
    public function getNilaiRataRata($nTugas, $nKuis, $nUTS, $nUAS) {
        $rataRata = ($nTugas + $nKuis + $nUTS + $nUAS) / 4;
        return $rataRata;
    }
}
$mhs1 = new Mahasiswa();
echo "Nilai Rata-Rata: " . $mhs1->getNilaiRataRata(80, 80, 85, 90);
?>