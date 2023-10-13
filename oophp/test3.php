<?php

abstract class Buah {
	private $warna;

abstract public function makan();

public function setWarna($warna){
	$this->warna = $warna;
	}
}


class Apel extends Buah{
	public function makan(){
		//kunyah
		//sampe bagian tengah
	}
}

class Jeruk extends Buah {
	public function makan(){
		//Kupas
		//kunyah
	}
}

$Apel = new Apel();
$Apel->makan();

$Buah = new Buah();
$Buah->makan();