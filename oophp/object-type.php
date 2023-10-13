<?php

class Produk {
	public 	$judul = "judul", //property default
			$penulis = "penulis", //property default
			$penerbit = "penerbit", //property default
			$harga = 0; //property default
			
//OOP Constructor
	public function __construct($judul, $penulis, $penerbit, $harga) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
	}
}

//OOP Object Type
class CetakInfoProduk { 
	public function cetak (Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Produk( "Naruto", "Masashi", "Shonen", 30000);

echo "<hr>";

$produk2 = new Produk( "Uncherted", "Neil Druck", "Sony Comp", 250000);

 echo "Komik : ".$produk1->getLabel();
 echo "<br>";
 echo "game : ".$produk2->getLabel();
 echo "<br>";
 $infoProduk1 = new CetakInfoProduk();
 echo $infoProduk1->cetak ($produk1);

?>