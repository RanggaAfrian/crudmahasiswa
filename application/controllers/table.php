<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class table extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('table');
    }

    public function index()
    {
        $this->load->view('table_vw');
    }
}
?>