<?php

class Personel_model extends CI_Model {

    public function kayit_getir(){

        $sonuc = $this->db->get("personel")->result();

        return $sonuc;

    }

    public function kayit_ekle($data){

        $insert = $this->db->insert("personel", $data);

        return $insert;
    }

    public function kayit_guncelle($data = array(), $where = array()){

        $update = $this->db->where($where)->update("personel", $data);

        return $update;
    }


    public function kayit_sil($where = array()){

        $delete = $this->db->where($where)->delete("personel");

        return $delete;
    }

}