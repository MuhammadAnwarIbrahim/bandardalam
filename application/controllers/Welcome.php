<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/atas');
        $this->load->view('template/rumah');
        $this->load->view('template/footer');
    }

    public function validateLogin()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Harap isi bidang email!',
            'valid_email' => 'Email tidak valid!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Harap isi bidang password!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('false-login', true);
            $this->session->set_flashdata('validateLoginFalse', $this->form_validation->error_array());
            $this->load->library('user_agent');
            redirect($this->agent->referrer());
        } else {
            //validasi sukses
            $this->login();
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('success-logout', 'Berhasil!');
        redirect(base_url('welcome'));
    }

    private function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            //user ada
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                    ];

                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('login-success', 'Berhasil!');
                    redirect(base_url('user'));
                } else {
                    $this->session->set_flashdata('fail-pass', 'Gagal!');
                    redirect(base_url('welcome'));
                }
            } else {
                $this->session->set_flashdata('fail-email', 'Gagal!');
                redirect(base_url('welcome'));
            }
        } else {
            $this->session->set_flashdata('fail-login', 'Gagal!');
            redirect(base_url('welcome'));
        }
    }

    public function DataAparatur()
    {
        $this->load->view('template/atas');
        $this->load->view('aparatur');
        $this->load->view('template/footer');
    }

    public function DataWilayah()
    {
        $this->load->view('template/atas');
        $this->load->view('wilayah');
        $this->load->view('template/footer');
    }

    public function DataLogo()
    {
        $this->load->view('template/atas');
        $this->load->view('logo');
        $this->load->view('template/footer');
    }


    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            $user_token = $this->db->get_where('token', ['token => $token'])->row_array();
            if ($user_token) {
                if (time() - $user_token['date_created'] < (600 * 600 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('token', ['email' => $email]);
                    $this->session->set_flashdata('success-verify', 'Bserhasil!');
                    redirect(base_url('welcome'));
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('token', ['email' => $email]);

                    $this->session->set_flashdata('fail-token-expired', 'gagal');
                    redirect(base_url('welcome'));
                }
            } else {
                $this->session->set_flashdata('fail-token', 'gagal');
                redirect(base_url('welcome'));
            }
        } else {
            $this->session->set_flashdata('fail-verify', 'gagal');
            redirect(base_url('welcome'));
        }
    }
}
