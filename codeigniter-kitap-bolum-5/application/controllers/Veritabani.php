<?php

class Veritabani extends CI_Controller {

    public function index(){

        $liste = $this
            ->db
            ->get("personel")
            ->result();

        print_r($liste);
    }

    public function where(){

//        $sonuc = $this
//            ->db
//            ->where("personel_adi", "Gökhan Kandemir")
//            ->get("personel")
//            ->result();

//        $sonuc = $this->db->where("maas >", 5000)->get("personel")->result();

//
//        $sonuc = $this
//            ->db
//            ->where("maas >", 5000)
//            ->where("yas <", 25)
//            ->get("personel")
//            ->result();

        $data = array(
            "maas >"    => 5000,
            "yas <"     => 25
        );

        $sonuc = $this
            ->db
            ->where($data)
            ->get("personel")
            ->result();


        echo "<pre>";
        print_r($sonuc);
        echo "<pre>";

    }

    public function or_where(){

        $data = array(
            "maas >"    => 5000,
            "yas <"     => 25
        );

        $sonuc = $this
            ->db
            ->or_where($data)
            ->get("personel")
            ->result();

        echo "<pre>";
        print_r($sonuc);
        echo "<pre>";

    }

    public function like(){

        $sonuc = $this->db
            ->like("personel_adi", "ett")
            ->get("personel")
            ->result();

        echo "<pre>";
        print_r($sonuc);
        echo "<pre>";

    }

    public function like_after(){

       $sonuc = $this->db
            ->like("personel_adi", "Fe", "after")
            ->get("personel")
            ->result();

        echo "<pre>";
        print_r($sonuc);
        echo "<pre>";

    }

    public function like_before(){

        $sonuc = $this->db
            ->like("personel_adi", "ir", "before")
            ->get("personel")
            ->result();

        echo "<pre>";
        print_r($sonuc);
        echo "<pre>";

    }

    public function order_by(){

//        $sonuc = $this->db
//            ->order_by("personel_adi", "ASC")
//            ->get("personel")
//            ->result();

        $sonuc = $this->db
            ->order_by("maas", "DESC")
            ->get("personel")
            ->result();

        echo "<pre>";
        print_r($sonuc);
        echo "<pre>";

    }

    public function limit(){

        $sonuc = $this->db
            ->limit(2)
            ->get("personel")
            ->result();

        echo "<pre>";
        print_r($sonuc);
        echo "<pre>";

    }

    public function query(){

//        $sonuc = $this->db
//            ->query("SELECT * FROM personel LIMIT 1")
//            ->result();

        $sonuc = $this->db
            ->query("SELECT * FROM personel WHERE yas > 20")
            ->result();

        echo "<pre>";
        print_r($sonuc);
        echo "<pre>";

    }

    public function insert(){


//        $data = array(
//
//            "personel_adi" => "İbrahim Soner Zorbakır",
//            "eposta"       => "szorbakir@gmail.com",
//            "yas"          => 26,
//            "maas"         => 8000
//        );
//
//        $data = array(
//
//            "personel_adi" => "Yazılım Eğitim",
//            "eposta"       => "info@yazilimegitim.net",
//            "yas"          => 30,
//            "maas"         => 20000
//        );


        $data = array(

            "personel_adi" => "İlker İsmailoğlu",
            "eposta"       => "ilkerismailoglu@gmail.com",
            "yas"          => 30,
            "maas"         => 15000
        );

        $insert = $this->db->insert("personel", $data);

        if($insert){
            echo "Kayıt Ekleme Başarılıdır";
        }else{
            echo "Kayıt Ekleme İşlemi Başarısızdır";
        }

    }

    public function update(){


        $data = array(

            "personel_adi" => "İflasettin Köse",
        );

        $update = $this->db->where("id", 7)->update("personel", $data);

        if($update){
            echo "Kayıt Düzenleme Başarılıdır";
        }else{
            echo "Kayıt Düzenleme İşlemi Başarısızdır";
        }


    }

    public function delete(){

        $delete = $this->db->where("id", 7)->delete("personel");

        if($delete){
            echo "Kayıt Başarıyla Silindi";
        }else{
            echo "Kayıt Silme İşlemi Başarısızdır";
        }


    }

}