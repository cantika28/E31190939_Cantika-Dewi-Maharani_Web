<?php
class kalkulator{
//deklarasi variable
private $bil1,
        $bil2,
        $bil3,
        $hitung;
 
function tambah($bil1,$bil3){
    $this->bil1 = $bil1;
    $this->bil3 = $bil3;
    $hasil = $this->bil1 + $this->bil3;
    return $hasil;
}
function kurang($bil1,$bil2){
    $this->bil1 = $bil1;
    $this->bil2 = $bil2;
    $hasil = $this->bil1 - $this->bil2;
    return $hasil;
}
function bagi($bil1,$bil2){
    $this->bil1 = $bil1;
    $this->bil2 = $bil2;
    $hasil = $this->bil1 / $this->bil2;
    return $hasil;
}
function kali($bil3,$bil2){
    $this->bil3 = $bil3;
    $this->bil2 = $bil2;
    $hasil = $this->bil3 * $this->bil2;
    return $hasil;
}
}
 
$hitung = new kalkulator();
 
echo $hitung->tambah("3","19");
echo "<br>";
echo $hitung->kurang("43","4");
echo "<br>";
echo $hitung->bagi("30","3");
echo "<br>";
echo $hitung->kali("5","6");
 
?>