<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SearchController extends CI_Controller
{
    public function index()
    {
        $this->load->model('SearchModel');
        $keyword = $this->input->get('keyword');
        $keyword_tujuan = $this->input->get('keyword_tujuan');
        $berat = $this->input->get('berat');
        $data = $this->SearchModel->ambil_data($keyword,$keyword_tujuan);
        $data = array(
            'keyword'    => $keyword,
            'data'        => $data,
            'berat'        => $berat
        );

       
        $data_tujuan = $this->SearchModel->ambil_data($keyword,$keyword_tujuan);
        $data_tujuan = array(
            'keyword_tujuan'    => $keyword_tujuan,
            'data_tujuan'        => $data_tujuan
        );

        if (!$this->session->userdata('email')) {
            $this->load->view('template/atas');
        }else{
            $this->load->view('user/atasuser');
        }
       
        $this->load->view('search', $data , $data_tujuan);
        $this->load->view('template/footer');
        
    }
}
