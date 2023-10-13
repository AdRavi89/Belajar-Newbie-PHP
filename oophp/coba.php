<?php

class Komik extends Produk {
	public function getInfoProduct(){
		$str = "Komik : {$this->judul} | {$this->getLabel ()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduct() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam";
		return $str;
	}
}
