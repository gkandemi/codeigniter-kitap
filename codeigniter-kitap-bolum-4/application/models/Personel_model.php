<?php

class Personel_model extends CI_Model {

    public function list_all(){

        // Buraya personel listelemek için gerekli kodlar gelecek

        $result = $this->db->get("personel")->result();

        return $result;

    }

    public function get($where = array()){

        // Buraya tek bir personel getirmek için gerekli kodlar gelecek

        $row = $this->db->where($where)->get("personel")->row();

        return $row;
    }

    public function insert($data = array()){

        // Buraya personel eklemek için gerekli kodlar gelecek
        $insert = $this->db->insert("personel", $data);

        return $insert;
    }

    public function delete($where){

        // Buraya personel silmek için gerekli kodlar gelecek
        $delete = $this->db->where($where)->delete("personel");

        return $delete;
    }

    public function update($where, $data){

        // Buraya personel duzenlemek için gerekli kodlar gelecek
        $update = $this->db->where($where)->update("personel", $data);

        return $update;
    }

    public function order($field = "id", $order_by = "ASC"){

        // Buraya personel sıralamak için gerekli kodlar gelecek
        $result =
            $this
                ->db
                ->order_by($field, $order_by)
                ->get("personel")
                ->result();

        return $result;
    }

}