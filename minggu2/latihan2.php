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
     return "Hidupkan Laptop $this->merk $this->pemilik";
   }
   public function matikan_laptop() {
     return "Matikan Laptop $this->merk $this->pemilik";
   }
   public function restart_laptop() {
     return "Matikan Laptop $this->merk $this->pemilik.
     Hidupkan Laptop $this->merk $this->pemilik";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_milik_a= new laptop("milik A", "ASUS");
$laptop_milik_b= new laptop("milik B", "Acer");
$laptop_milik_c= new laptop("milik C", "Lenovo");
  
// tampilkan method
echo $laptop_milik_a->hidupkan_laptop();
echo "<br />";
echo $laptop_milik_b->matikan_laptop();
echo "<br />";
echo $laptop_milik_c->restart_laptop();
echo "<br />";
?>