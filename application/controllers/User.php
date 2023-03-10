<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->verif_login();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/atasuser');
        $this->load->view('user/index');
        $this->load->view('template/footer');
    }

    public function verif_login()
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('not-login', 'Gagal!');
            redirect('welcome');
        }
    }


    public function regmitra()
    {
        $this->verif_login();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/atasuser');
        $this->load->view('user/pilihmitra');
        $this->load->view('template/footer');
    }
    public function tentang()
    {
        $this->verif_login();
        $this->load->view('user/atasuser');
        $this->load->view('tentang');
        $this->load->view('template/footer');
    }

    public function ongkir()
    {
        $this->verif_login();
        $this->load->view('user/atasuser');
        $this->load->view('Search');
        $this->load->view('template/footer');
    }

    
    public function home()
    {
        $this->verif_login();
        $this->load->view('user/atasuser');
        $this->load->view('template/rumah');
        $this->load->view('template/footer');
    }

    public function registration()
    {
        $this->load->view('template/atas');
        $this->load->view('user/registration');
        $this->load->view('template/footer');
    }

    public function registration_act()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom username.',
            'min_length' => 'Nama terlalu pendek.',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini telah digunakan!',
            'required' => 'Harap isi kolom email.',
            'valid_email' => 'Masukan email yang valid.',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[retype_password]', [
            'required' => 'Harap isi kolom Password.',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek',
        ]);
        $this->form_validation->set_rules('retype_password', 'Password', 'required|trim|matches[password]', [
            'matches' => 'Password tidak sama!',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/atas');
            $this->load->view('user/registration');
            $this->load->view('template/footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'is_active' => 1,
                'date_created' => time(),
            ];


            $this->db->insert('user', $data);

            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('welcome'));
        }
    }
}
