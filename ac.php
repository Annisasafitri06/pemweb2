<?php
class AC {
    // Properti
    public $merk = "kosong";
    public $ukuran = "kosong";
    public $warna = "kosong";

    // Method
    private function getAC($merk, $ukuran, $warna) {
        echo "AC ini adalah milik: " . $merk . "<br>";
        echo "Ukurannya adalah: " . $ukuran . "<br>";
        echo "Warnanya adalah: " . $warna . "<br>";
    }

    public function getDetail() {
        $this->getAC("Sharp", "10 meter", "putih");
    }
}

// Objek AC 1
$AC1 = new AC();
$AC1->merk = "LG";
$AC1->ukuran = "60 inch";
$AC1->warna = "Hitam";
var_dump($AC1);
echo "<br><br><hr>";

// Objek AC 2
$AC2 = new AC();
$AC2->getDetail();
echo "<br><br>";
var_dump($AC2);
?>
