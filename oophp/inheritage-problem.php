<?php

class Produk {
	public 	$judul, //property default
			$penulis, //property default
			$penerbit, //property default
			$harga, //property default
			$jmlHalaman,
			$waktuMain,
			$tipe;
			
//OOP Constructor
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
//Properti
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getLabel(){
		return "$this->judul, $this->penulis, $this->penerbit";
	}
//OOP inheritance
//komik : Naruto | Mashashi, Shonen (Rp.30000) - 100 halaman
	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel ()} (Rp. {$this->harga})";
		if ($this->tipe == "komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} elseif ($this->tipe == "game") {
			$str .= " ~ {$this->waktuMain} Jam.";
		}
		return $str;
	}
}

//OOP Object Type
class CetakInfoProduk { 
	public function cetak (Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Produk( "Naruto", "Masashi", "Shonen", 30000, 100, 0, "komik");

echo "<hr>";

$produk2 = new Produk( "Uncherted", "Neil Druck", "Sony Comp", 250000, 0, 50, "game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
?>