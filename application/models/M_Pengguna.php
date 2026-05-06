<?php
class M_Pengguna extends CI_Model {

    // Fungsi verifikasi login
    public function login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password); // Disarankan pakai password_hash di aplikasi asli
        return $this->db->get('users')->row();
    }

    // Fungsi ambil semua data user
    public function ambil_semua() {
        return $this->db->get('users')->result();
    }
}