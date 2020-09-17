<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rjtanggal_model extends CI_Model
{
    public $tabel = 'tb_rjtanggal';
    public $id = 'sk_tanggal';
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
        $this->db->select('*');
        $this->db->select('year(tanggal) as tahun');
        $this->db->select('COUNT(tb_rjpasien.sk_pasien) as pas');
        $this->db->from($this->tabel);
        $this->db->join('tb_rjpasien', 'tb_rjpasien.sk_pasien=tb_rjtanggal.sk_tanggal');
        $this->db->group_by('tahun');
        return $query = $this->db->get()->result();
    }
    public function insertimport($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace($this->tabel, $data);
        }
    }
}
