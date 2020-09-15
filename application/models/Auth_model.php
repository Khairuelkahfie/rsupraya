<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public $tabel = 'user';
    public $id = 'id';
    public $order = 'ASC';
    public function ambiluser($username)
    {
        return $this->db->get_where($this->tabel, ["username" => $username])->row_array();
    }
    public function ambil()
    {
        return $this->db->get($this->tabel)->row_array();
    }
}
