<?php

class Produk {
	public 	$judul = "judul", //property default
			$penulis = "penulis", //property default
			$penerbit = "penerbit", //property default
			$harga = 0; //property default

	public function sayHello(){
		return "Hello World!";
	}

	public function getLabel(){
		return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
	}
}

// $produk1 = new Produk();
// $produk1 -> judul1 = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi";
$produk3->penerbit = "Shonen";
$produk3->harga = 30000;

echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Uncherted";
$produk4->penulis = "Neil Druck";
$produk4->penerbit = "Sony Comp";
$produk4->harga = 250000;








 echo "komik : $produk3->penulis, $produk3->penerbit"; 
 echo "<br>";
 echo $produk3->sayHello();
 echo "<br>";
 echo $produk3->getLabel();
  echo "<br>";
 echo "game : ".$produk4->getLabel();



 class Person {
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo "Objek Person telah dibuat.";
    }
}

// Membuat objek baru dengan menggunakan constructor
$person1 = new Person("John Doe", 25);

// Mengakses properti objek
echo "Nama: " . $person1->name; // Output: John Doe
echo "Usia: " . $person1->age; // Output: 25