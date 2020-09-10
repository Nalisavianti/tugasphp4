<?php
class kendaraan {
	public $nama,$merk,$jumlahroda;

	public function getCetak(){
 	return "Truk | Daihatsu | 16 roda";
 	}
 }

 class kendaraanUmum extends kendaraan{
 	public $maxpenumpang10 = false;

 	public function periksapenumpang(){
 		$this->maxpenumpang10 =true;
 		return "Penumpang Telah Diperiksa";
 	}
 }
 $angkot = new kendaraanUmum();
 echo $angkot-> getCetak();
 echo "<br>";
 echo $angkot-> periksapenumpang();
 ?>