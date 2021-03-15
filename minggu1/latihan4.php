<?php
    class kendaraan {
        var $jenisKendaraan;
        var $jumlahRoda;
        var $bahanBakar;
        var $harga;
        var $merek;
        var $tahunPembuatan;
        
        function dapatSubsidi() {
            if ($this->bahanBakar = 'Premium' && $this->tahunPembuatan < 2005) $subsidi = 'Dapat';
            else $subsidi = 'Tidak Dapat';
            return $subsidi;
        }
        
        function hargaSecond() {
            if ($this->tahunPembuatan > 2010)
                $second = $this->harga * 20/100;
            else if ($this->tahunPembuatan >= 2005)
                $second = $this->harga * 30/100;
            else 
                $second = $this->harga * 40/100;
                return $second;        
        }
        
    }

    // deklarasi objek
    $mobil = new kendaraan();
    $motor = new kendaraan();
    $pickUp = new kendaraan();

    echo $mobil -> harga = 12500000;
    echo "<br />";
    echo $mobil -> bahanBakar = 'Solar';
    echo "<br />";
    echo $mobil -> tahunPembuatan = 2010;
    echo "<br />";
    echo $mobil -> dapatSubsidi();
    echo "<br />";
    echo $mobil -> hargaSecond();
    echo "<br />";

    echo "<hr />";

    echo $motor -> harga = 11000000;
    echo "<br />";
    echo $motor -> bahanBakar = 'Premium';
    echo "<br />"; 
    echo $motor -> tahunPembuatan = 2007;
    echo "<br />";
    echo $motor -> dapatSubsidi();
    echo "<br />";
    echo $motor -> hargaSecond();
    echo "<br />";

    echo "<hr />";

    echo $pickUp -> harga = 20000000;
    echo "<br />";
    echo $pickUp -> bahanBakar = 'Solar';
    echo "<br />"; 
    echo $pickUp -> tahunPembuatan = 2004;
    echo "<br />";
    echo $pickUp -> dapatSubsidi();
    echo "<br />";
    echo $pickUp -> hargaSecond();
    echo "<br />";
?>