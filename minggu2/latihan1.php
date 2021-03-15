<?php
// buat class laptop
class laptop {
  
   public $pemilik;
   public $merk;
  
   // constructor sebagai pembuat nilai awal
   public function __construct($pemilik, $merk) {
     $this->pemilik = $pemilik;
     $this->merk = $merk;
   }
  
   public function hidupkan_laptop() {
     return "Hidupkan Laptop $this->merk punya $this->pemilik";
   }
   public function matikan_laptop() {
     return "Matikan Laptop $this->merk punya $this->pemilik";
   }
   public function restart_laptop() {
     return "Hidupkan Laptop $this->merk punya $this->pemilik.
     <br /> Matikan Laptop $this->merk punya $this->pemilik";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_rani= new laptop("Rani", "Lenovo");
  
// tampilkan method
echo $laptop_rani->hidupkan_laptop();
echo "<br />";
echo $laptop_rani->matikan_laptop();
echo "<br />";
echo $laptop_rani->restart_laptop();
echo "<br />";
?>