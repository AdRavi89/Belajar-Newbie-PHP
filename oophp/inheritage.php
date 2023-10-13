<?php

class Produk {
	public 	$judul, //property default
			$penulis, //property default
			$penerbit, //property default
			$harga, //property default
			$jmlHalaman,
			$waktuMain;
			
//OOP Constructor
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
//Properti
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	}

	public function getLabel(){
		return "$this->judul, $this->penulis, $this->penerbit";
	}
//OOP inheritance
	public function getInfoProduct(){
		$str = "{$this->judul} | {$this->getLabel ()} (Rp. {$this->harga})";

		return $str;
	}
}


class Komik extends Produk {
	public function getInfoProduct(){
		$str = "Komik : {$this->judul} | {$this->getLabel ()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman,";
		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduct() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam,";
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


$produk1 = new Komik( "Naruto", "Masashi", "Shonen", 30000, 100, 0, "komik");

echo "<hr>";

$produk2 = new Game( "Uncherted", "Neil Druck", "Sony Comp", 250000, 0, 50, "game");

echo $produk1->getInfoProduct();
echo "<br>";
echo $produk2->getInfoProduct();
?>