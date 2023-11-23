<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemesanan_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Pemesanan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pemesanan'] = $this->Pemesanan_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("Pemesanan/vw_Pemesanan", $data);
        $this->load->view("layout/footer", $data);
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Pemesanan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
        $this->form_validation->set_rules('nama', 'Nama Pemesanan', 'required', [
            'required' => 'Nama Pemesanan Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Pemesanan Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[Pemesanan.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|Integer', [
            'required' => 'No Hp Pemesanan Wajib di isi',
            'integer' => 'No hp pemesanan wajib angka'
        ]);
        $this->form_validation->set_rules('jenis_pembayaran', 'jenis_pembayaran', 'required', [
            'required' => 'jenis_pembayaran Pemesanan Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("Pemesanan/vw_tambah_Pemesanan", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->POST('nama'),
                'alamat' => $this->input->POST('alamat'),
                'email' => $this->input->POST('email'),
                'no_hp' => $this->input->POST('no_hp'),
                'jenis_pembayaran' => $this->input->POST('jenis_pembayaran'),
                
            ];
            $this->Pemesanan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Pemesanan Berhasil Ditambah!</div>');
            redirect('Pemesanan');
        }
    }

    public function hapus($id)
    {
        $this->Pemesanan_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Pemesanan Berhasil Dihapus!</div>');
        redirect('Pemesanan');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Ubah Pemesanan";
        $data['pemesanan'] = $this->Pemesanan_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Pemesanan', 'required', [
            'required' => 'Nama Pemesanan Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Pemesanan Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
            'valid_email' => 'Email Harus valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|Integer', [
            'required' => 'No Hp Pemesanan Wajib di isi',
            'integer' => 'No hp pemesanan wajib angka'
        ]);
        $this->form_validation->set_rules('jenis_pembayaran', 'jenis_pembayaran', 'required', [
            'required' => 'jenis_pembayaran Pemesanan Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("pemesanan/vw_ubah_pemesanan", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->POST('nama'),
                'alamat' => $this->input->POST('alamat'),
                'email' => $this->input->POST('email'),
                'no_hp' => $this->input->POST('no_hp'),
                'jenis_pembayaran' => $this->input->POST('jenis_pembayaran'),
            ];
            $id = $this->input->POST('id');
            $this->Pemesanan_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Pemesanan Berhasil Diubah!</div>');
            redirect('Pemesanan');
        }
    }
}

/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */
