<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SearchModel extends CI_Model
{

    public function ambil_data($keyword = null, $keyword_tujuan=null)
    {
        $this->db->select('*');
        $this->db->from('ongkir');
        $this->db->where('asal', $keyword);
        $this->db->where('tujuan',$keyword_tujuan);
        return $this->db->get()->result_array();
    }
}
