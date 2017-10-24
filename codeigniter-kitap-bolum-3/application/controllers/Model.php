<?php

class Model extends CI_Controller {

    public function index(){

        $this->load->model("personel_model");

        $liste = $this->personel_model->kayit_getir();

        print_r($liste);

    }


    public function insert(){

        $this->load->model("personel_model");

        $data = array(

            "personel_adi" => "Handan Kandemir",
            "eposta"       => "handan@gkandemir.com",
            "yas"          => 22,
            "maas"         => 10000
        );

        $insert = $this->personel_model->kayit_ekle($data);

        if($insert){
            echo "Kayıt Ekleme Başarılıdır";
        }else{
            echo "Kayıt Ekleme İşlemi Başarısızdır";
        }

    }

    public function update(){

        $this->load->model("personel_model");

        $data = array(
            "personel_adi" => "Sadullah Demircioğlu",
            "eposta"       => "sadullah@yazilimegitim.net"
        );

        $where = array(
            "id"    => 2
        );

        $update = $this->personel_model->kayit_guncelle($data, $where);

        if($update){
            echo "Kayıt Düzenleme Başarılıdır";
        }else{
            echo "Kayıt Düzenleme İşlemi Başarısızdır";
        }
    }


    public function delete(){

        $this->load->model("personel_model");

        $where = array(
            "id"    => 3
        );

        $delete = $this->personel_model->kayit_sil($where);

        if($delete){
            echo "Kayıt Başarıyla Silindi";
        }else{
            echo "Kayıt Silme İşlemi Başarısızdır";
        }
    }
}