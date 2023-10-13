<?php

class Produk {
	public 	$judul, //property default
			$penulis, //property default
			$penerbit; //property default

		protected	$diskon = 0;

	private $harga; //property default

			
//OOP Constructor
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
//Properti
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	public function setDiskon( $diskon ){
		$this->diskon = $diskon;
	}

	public function getHarga(){
		return $this->harga - ($this->harga * $this-> diskon / 100);
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
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

		parent::__construct($judul, $penulis, $penerbit, $harga );
		$this->jmlHalaman = $jmlHalaman;

	}

	public function getInfoProduct(){
		$str = "Komik : ". parent::getInfoProduct() ." - {$this->jmlHalaman} Halaman,";
		return $str;
	}
}

class Game extends Produk {
public $waktuMain;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {

	parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->waktuMain = $waktuMain;
}

	public function getInfoProduct() {
		$str = "Game : ". parent::getInfoProduct() ." - {$this->waktuMain} Jam,";
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


$produk1 = new Komik( "Naruto", "Masashi", "Shonen", 30000, 100);

echo "<hr>";

$produk2 = new Game( "Uncherted", "Neil Druck", "Sony Comp", 250000, 50);

echo $produk1->getInfoProduct();
echo "<br>";
echo $produk2->getInfoProduct();
echo "<hr>";


$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<br>";


?>