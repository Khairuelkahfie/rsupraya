<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwaktu_model extends CI_Model
{
    public $tabel = 'tb_riwaktu';
    public $id = 'sk_waktu';
    public $order = 'ASC';
    function tampiltahun()
    {
        $this->db->select('year(tanggal) as tahun');
        $this->db->select('COUNT(tanggal) as thn');
        $this->db->group_by('tahun');
        $query = $this->db->get($this->tabel)->result_array();;
        return $query;
    }
    public function tampiljumlahpasien()
    {
        $this->db->select('*');
        $this->db->from($this->tabel);
        return $this->db->count_all_results();
    }
    function tampil()
    {
        $this->db->select('tb_riwaktu.sk_waktu, tb_riwaktu.pasien_masuk, tb_ripasien.sk_pasien');
        $this->db->select('year(pasien_masuk) as tahun');
        $this->db->select('COUNT(tb_ripasien.sk_pasien) as psn');
        $this->db->from($this->tabel);
        $this->db->join('tb_ripasien', 'tb_ripasien.sk_pasien=tb_riwaktu.sk_waktu');
        $this->db->group_by('tahun');
        return $query = $this->db->get()->result();
    }
}
