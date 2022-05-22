<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kk extends CI_Controller 
{
    public function __construct()
    {
        parent:: __construct();
		$this->load->model("M_kk");
    }
    
    function belum()
    {
        $this->load->view("kk/belum");
    }

    function data_belum()
    {
        $data = $this->M_kk->belum();
        echo json_encode($data);
    }
}

 ?>