<?php 

class Mobil {
    private $odoMtr;

    function __construct()
    {
       $this->odoMtr = 2000;
    }

    public function nyalakan ($model, $warna){
        return "Nyalakan mobil $model - $warna";
    }
    public function berjalan ($km){
        return $this->odoMtr + $km;
    }
}

$mobil1 = new Mobil();

echo $mobil1 -> nyalakan ("Lamborgini","merah");
echo "Berjalan sejauh :" . $mobil1->berjalan(500);
echo "<br>";
echo $mobil1 -> nyalakan ("Ferari","biru");
echo "<br>";
echo $mobil1 -> nyalakan ("NissanGTR","silver");


?>
