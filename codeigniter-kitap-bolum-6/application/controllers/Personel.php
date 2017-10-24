<?php

class Personel extends CI_Controller {

    public function __construct(){

        parent::__construct();
        // login kontrolünün yapilacagi bölüm...
        if(!get_user()){

            redirect(base_url("kullanici/login_form"));
        }
    }

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

    public function insertt(){

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

    public function insert(){

        // Buraya personel eklemek için gerekli kodlar gelecek
        $this->load->model("personel_model");

        $config['upload_path']          = 'uploads/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library("upload", $config);

        if($this->upload->do_upload("imgUrl")){

            $imgUrl = $this->upload->data("file_name");

            $data = array(
                "ad_soyad"  => $this->input->post("ad_soyad"),
                "email"     => $this->input->post("email"),
                "telefon"   => $this->input->post("telefon"),
                "adres"     => $this->input->post("adres"),
                "departman" => $this->input->post("departman"),
                "imgUrl"    => $imgUrl
            );

            $insert = $this->personel_model->insert($data);

            if($insert){

                // Ekleme işleminin başarılı olduğunu söyleyen mesaj verme komutları
                $alert = array(
                    "title"     => "İşlem Başarılı!!",
                    "message"   => "Ekleme işlemi başarılıdır",
                    "type"      => "alert-success"
                );

            }else{

                // Ekleme işleminin başarısız olduğunu söyleyen mesaj verme komutları
                $alert = array(
                    "title"     => "İşlem Başarısız!!",
                    "message"   => "Ekleme işlemi başarısızdır",
                    "type"      => "alert-danger"
                );
            }

        }else{

            // Upload işleminin başarısız olduğunu söyleyen mesaj verme komutları
            $alert = array(
                "title"     => "İşlem Başarısız!!",
                "message"   => $this->upload->display_errors(),
                "type"      => "alert-danger"
            );
        }

        $this->session->set_flashdata("alert", $alert);

        redirect(base_url());

    }

    public function delete($id){

        // Buraya personel silmek için gerekli kodlar gelecek
        $this->load->model("personel_model");

        $where = array(
            "id"    => $id
        );

        $delete = $this->personel_model->delete($where);

        if($delete){

            // Silme işleminin başarılı olduğunu söyleyen mesaj verme komutları
            $alert = array(
                "title"     => "İşlem Başarılı!!",
                "message"   => "Silme işlemi başarılıdır",
                "type"      => "alert-success"
            );

        }else{

            // Silme işleminin başarısız olduğunu söyleyen mesaj verme komutları
            $alert = array(
                "title"     => "İşlem Başarısız!!",
                "message"   => "Silme işlemi başarısızdır",
                "type"      => "alert-danger"
            );
        }


        $this->session->set_flashdata("alert", $alert);

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

        $img = $_FILES["imgUrl"]["name"];

        if($img){

            $config['upload_path']          = 'uploads/';
            $config['allowed_types']        = 'gif|jpg|png';

            $this->load->library("upload", $config);

            if($this->upload->do_upload("imgUrl")) {

                $imgUrl = $this->upload->data("file_name");

                $data = array(
                    "ad_soyad"  => $this->input->post("ad_soyad"),
                    "email"     => $this->input->post("email"),
                    "telefon"   => $this->input->post("telefon"),
                    "adres"     => $this->input->post("adres"),
                    "departman" => $this->input->post("departman"),
                    "imgUrl"    => $imgUrl
                );

            } else {

                // Upload işleminin başarısız olduğunu söyleyen mesaj verme komutları
                $alert = array(
                    "title"     => "İşlem Başarısız!!",
                    "message"   => $this->upload->display_errors(),
                    "type"      => "alert-danger"
                );

            }

        }else {

            $data = array(
                "ad_soyad" => $this->input->post("ad_soyad"),
                "email" => $this->input->post("email"),
                "telefon" => $this->input->post("telefon"),
                "adres" => $this->input->post("adres"),
                "departman" => $this->input->post("departman"),
            );
        }

        $where = array(
            "id"    => $id
        );

        $update = $this->personel_model->update($where, $data);

        if($update){

            // Düzenleme işleminin başarılı olduğunu söyleyen mesaj verme komutları
            $alert = array(
                "title"     => "İşlem Başarılı!!",
                "message"   => "Düzenleme işlemi başarılıdır",
                "type"      => "alert-success"
            );

        }else{

            // Düzenleme işleminin başarısız olduğunu söyleyen mesaj verme komutları
            $alert = array(
                "title"     => "İşlem Başarısız!!",
                "message"   => "Düzenleme işlemi başarısızdır",
                "type"      => "alert-danger"
            );
        }

        $this->session->set_flashdata("alert", $alert);

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
