<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pinjam extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pinjam_model');
        
    }

	public function index()
	{
        $data['judul'] = "Halaman Peminjaman";
        $data['pinjam'] = $this->pinjam_model->get();
		$this->load->view("layout/header");
        $this->load->view("pinjam/vw_pinjam", $data);
        $this->load->view("layout/footer");
	}
    public function tambah()
    {
      $data['judul'] = "Halaman Tambah Data";
      $this->load->view('layout/header');
      $this->load->view('pinjam/vw_tambah_pinjam', $data);
      $this->load->view('layout/footer');
    }
    public function detail($id)
    {
      $data['judul'] = "Halaman Peminjaman";
      $data['pinjam'] = $this->pinjam_model->getById($id);
      $this->load->view('layout/header');
      $this->load->view('pinjam/vw_detail_pinjam', $data);
      $this->load->view('layout/footer');
    }

    public function hapus($id){
        $this->pinjam_model->delete($id);
        redirect('pinjam');
      }
      function upload ()
  {
    $data = [
        'nik' => $this->input->POST('nik'),
        'nama' => $this->input->POST('nama'),
        'alamat' => $this->input->POST('alamat'),
        'notelp' => $this->input->POST('notelp'),
        'email' => $this->input->POST('email'),
        'besarPinjam' => $this->input->POST('besarPinjam'),
        'durasi' => $this->input->POST('durasi'),
    ];
    $this->pinjam_model->insert($data);
    redirect('pinjam');
     }
     public function edit($id)
     {
       $data['judul'] = "Halaman Peminjaman";
       $data['pinjam'] = $this->pinjam_model->getById($id);
       $this->load->view('layout/header');
       $this->load->view('pinjam/vw_ubah_pinjam', $data);
       $this->load->view('layout/footer');
     }
   
     public function update ()
     {
       $data = [
        'nik' => $this->input->POST('nik'),
        'nama' => $this->input->POST('nama'),
        'alamat' => $this->input->POST('alamat'),
        'notelp' => $this->input->POST('notelp'),
        'email' => $this->input->POST('email'),
        'besarPinjam' => $this->input->POST('besarPinjam'),
        'durasi' => $this->input->POST('durasi'),
    ];
    
       $id = $this->input->POST('id');
       $this->pinjam_model->update(['id'=> $id], $data);
       redirect('pinjam');
    }
   
}
