<?php
class Kode extends CI_Controller{

    public function hello ($var) {
        if (isset($var)) {
            switch(strtolower($var)) {
                case 'php':
                    $this->load->view('phpview');
                case 'python':
                    $this->load->view('pythonview');
                case 'cpp':
                    $this->load->view('cppview');
                case 'java':
                    $this->load->view('javaview');
                default:
                    echo 'Input URI Salah';
            }
        }else{
            echo 'Input URI Salah';
        }
    }
}