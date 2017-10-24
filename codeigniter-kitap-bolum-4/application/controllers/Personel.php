<?php

class Personel extends CI_Controller {

    public function index(){

        // Buraya personel listelemek için gerekli kodlar gelecek

        $this->load->model("personel_model");

        $result = $this->personel_model->list_all();

        $viewData = array(
            "result"    => $result
        );

        $this->load->view("personel_liste", $viewData);
    }

    public function insert_form(){

        // Yeni Kayıt Ekle Formunu ekrna getirecek olan komutlar
        $this->load->view("personel_ekle");
    }



    public function insert(){

        // Buraya personel eklemek için gerekli kodlar gelecek
        $this->load->model("personel_model");

        $data = array(
            "ad_soyad"  => $this->input->post("ad_soyad"),
            "email"     => $this->input->post("email"),
            "telefon"   => $this->input->post("telefon"),
            "adres"     => $this->input->post("adres"),
            "departman" => $this->input->post("departman")
        );

        $insert = $this->personel_model->insert($data);

        if($insert){

            echo "Ekleme işlemi başarılıdır. Listeye dönmek için " . "<a href='" . base_url("personel") . "'>tıklayınız</a>";

        }else{

            echo "Ekleme işlemi başarısızdır. tekrar denemek için " . "<a href='" . base_url("personel/insert_form") . "'>tıklayınız</a>";
        }

    }

    public function delete($id){

        // Buraya personel silmek için gerekli kodlar gelecek
        $this->load->model("personel_model");

        $where = array(
            "id"    => $id
        );

        $this->personel_model->delete($where);

        redirect(base_url());
    }

    public function update_form($id){

        // Yeni Kayıt Düzenleme Formunu ekrna getirecek olan komutlar

        $this->load->model("personel_model");

        $where = array(
            "id"    => $id
        );

        $row = $this->personel_model->get($where);

        $viewData = array(
            "row"   => $row
        );

        $this->load->view("personel_duzenle", $viewData);
    }

    public function update($id){

        // Buraya personel güncellemek için gerekli kodlar gelecek
        $this->load->model("personel_model");

        $data = array(
            "ad_soyad" => $this->input->post("ad_soyad"),
            "email" => $this->input->post("email"),
            "telefon" => $this->input->post("telefon"),
            "adres" => $this->input->post("adres"),
            "departman" => $this->input->post("departman"),
        );

        $where = array(
            "id"    => $id
        );

        $update = $this->personel_model->update($where, $data);

        if($update){

            // Düzenleme işleminin başarılı olduğunu söyleyen mesaj verme komutları
            echo "Düzenleme işlemi başarılıdır. Listeye dönmek için " . "<a href='" . base_url("personel") . "'>tıklayınız</a>";

        }else{

            // Düzenleme işleminin başarısız olduğunu söyleyen mesaj verme komutları
            echo "Düzenleme işlemi başarısızdır. tekrar denemek için " . "<a href='" . base_url("personel/update_form") . "'>tıklayınız</a>";

        }

        redirect(base_url());

    }

    public function order($field, $order_by){

        // Buraya personel sıralamak için gerekli kodlar gelecek
        $this->load->model("personel_model");

        $result = $this->personel_model->order($field, $order_by);

        $viewData = array(
            "result"    => $result
        );

        $this->load->view("personel_liste", $viewData);
    }

}