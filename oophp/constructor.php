<?php

class Produk {
	public 	$judul = "judul", //property default
			$penulis = "penulis", //property default
			$penerbit = "penerbit", //property default
			$harga = 0; //property default

	public function __construct($judul, $penulis, $penerbit, $harga) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}



	// public function sayHello(){
	// 	return "Hello World!";
	// }

	public function getLabel(){
		return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
	}
}


$produk1 = new Produk( "Naruto", "Masashi", "Shonen", 30000);
// $produk3->judul = "Naruto";
// $produk3->penulis = "Masashi";
// $produk3->penerbit = "Shonen";
// $produk3->harga = 30000;

echo "<hr>";

$produk2 = new Produk( "Uncherted", "Neil Druck", "Sony Comp", 250000);
// $produk4->judul = "Uncherted";
// $produk4->penulis = "Neil Druck";
// $produk4->penerbit = "Sony Comp";
// $produk4->harga = 250000;



 // echo "<br>";
 // echo $produk1->sayHello();
 // echo "<br>";
 // echo $produk2->getLabel();

 echo "Komik : ".$produk1->getLabel();
 echo "<br>";
 echo "game : ".$produk2->getLabel();

