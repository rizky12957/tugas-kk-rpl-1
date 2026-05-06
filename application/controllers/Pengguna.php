<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pengguna');
    }

    // Menampilkan halaman login
    public function index()
    {
        $this->load->view('v_login');
    }

    // Proses login
    public function aksi_login()
    {
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');

        $cek = $this->M_Pengguna->login($user, $pass);

        if ($cek) {
            // Simpan username ke session
            $data_session = array(
                'nama' => $cek->username,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);

            redirect('pengguna/tampil_data');
        } else {
            $this->session->set_flashdata('pesan_error', 'Username atau Password salah!');
            redirect('pengguna');
        }
    }
    // Menampilkan data user
    // Menampilkan data user dan biodata
    public function tampil_data()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('pengguna');
        }

        // Ambil data users
        $data['hasil'] = $this->M_Pengguna->ambil_semua();

        // Ambil data biodata (pastikan fungsi ini ada di M_Pengguna)
        $data['biodata_hasil'] = $this->M_Pengguna->ambil_biodata();

        $this->load->view('v_data_user', $data);
    }

}