<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tugas_Matahati  extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('lib_tugas');
    }
    function index()
    {
        $Dita = $this->lib_tugas->totalPayment("anak", '2');

        $Adit = $this->lib_tugas->totalPayment("pria", '1');
        
        $Toni = $this->lib_tugas->totalPayment("pria", '1', true);

        $Intan = $this->lib_tugas->totalPayment("wanita", '2');
        
        $Kantong = 2000;

        $Intan += $Kantong;
        
        echo "Dita => total Rp.$Dita (Pakaian Anak) <br>";
        echo "Adit => total Rp.$Adit (Pakaian Pria Dewasa) <br>";
        echo "Toni => total Rp.$Toni (Pakaian Pria Dewasa) <br>";
        echo "Intan => total Rp.$Intan (Pakaian Wanita Dewasa) <br>";  
    }
}