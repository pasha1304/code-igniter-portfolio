<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {
    
    public function index($nama) 
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama; 
        $this->load->view('templates/header', $data);
        $this->load->view('home/halaman_coba', $data);
        $this->load->view('templates/footer');
    }

}