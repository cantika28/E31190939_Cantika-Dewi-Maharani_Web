<?php

class Demo_controller extends CI_Contoller {

    public function index (){
        echo "<h2>Demp Controller</h2>";
        echo "<br>Function yang dipanggil adalah index";
    }
    public function aksi (){
        echo "<h2>Demo Controller</h2>";
        echo "<br>Function yang dipanggil adalah aksi";
    }
}