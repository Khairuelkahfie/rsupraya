<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rjcarabayar_model extends CI_Model
{
    public $tabel = 'tb_rjcarabayar';
    public $id = 'sk_caraBayar';
    public $order = 'ASC';
    function tampilcarabayar()
    {
        $this->db->select('cara_bayar, COUNT(cara_bayar) as total');
        $this->db->group_by('cara_bayar');
        $this->db->order_by('total');
        $hasil = $this->db->get($this->tabel)->result_array();
        return $hasil;
    }
}
