<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Day extends CI_Controller {
    function index(){
        $this->load->library('nama_hari');
        $this->nama_hari->hari_ini();

        echo "<br/>";
        $this->nama_hari->sekarang("Selasa Juga");
    }
}