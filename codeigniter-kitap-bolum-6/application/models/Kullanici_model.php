<?php

class Kullanici_model extends CI_Model {

    public function get($where = array()){

        // Buraya tek bir kullanici getirmek için gerekli kodlar gelecek

        $row = $this->db->where($where)->get("kullanici")->row();

        return $row;
    }
}
