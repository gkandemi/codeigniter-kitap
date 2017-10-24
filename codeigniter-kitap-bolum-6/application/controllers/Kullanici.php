<?php

class Kullanici extends CI_Controller {

    public function index(){

        if(get_user()){

            redirect(base_url("personel"));

        }else{

            $this->login_form();
        }
    }


    public function login_form(){

        // login formunu ekrana getirecek metot kodlamaları
        if(get_user()) {

            redirect(base_url("personel"));
        }

        $this->load->helper("captcha");

        $parametre = array(
            'word'          => '',
            'img_path'      => 'captcha/',
            'img_url'       => base_url("captcha"),
            'font_path'     => 'fonts/corbel.ttf',
            'img_width'     => 100,
            'img_height'    => 35,
            'font_size'     => 15,
            'word_length'   => 5,
            'img_id'        => 'Imageid',
            'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(50, 50, 255),
                'text' => array(0, 100, 0),
                'grid' => array(67, 234, 10)
            )
        );

        $dogrulama_kodu = create_captcha($parametre);

        $viewData = array(
            "captcha"   => $dogrulama_kodu
        );

        $this->session->set_userdata("captcha", $dogrulama_kodu["word"]);

        $this->load->view("login_form", $viewData);
    }

    public function login(){

        if(get_user()) {

            redirect(base_url("personel"));
        }

        $email        = $this->input->post("email");
        $sifre        = $this->input->post("sifre");
        $captcha      = $this->input->post("captcha");
        $captcha_code = $this->session->userdata("captcha");

        if(!$email || !$sifre || !$captcha){

            $alert = array(
                "title"     => "İşlem Başarısız!!",
                "message"   => "Lütfen Tüm Alanları Eksiksiz olarak doldurunuz",
                "type"      => "alert-danger"
            );

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("kullanici/login_form"));

        }else if($captcha != $captcha_code){

            $alert = array(
                "title"     => "İşlem Başarısız!!",
                "message"   => "Doğrulama kodu yanlıştır",
                "type"      => "alert-danger"
            );

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("kullanici/login_form"));

        }else{

            $this->load->model("kullanici_model");

            $data = array(
                "email" => $email,
                "sifre" => md5($sifre)
            );

            $kullanici = $this->kullanici_model->get($data);

            if($kullanici){

                $user = array(
                    "kullanici_adi" => $kullanici->kullanici_adi,
                    "email"         => $kullanici->email
                );

                $this->session->set_userdata("user", $user);

                $alert = array(
                    "title"     => "Giriş Başarılıdır!!",
                    "message"   => $kullanici->kullanici_adi . " hoşgeldiniz..",
                    "type"      => "alert-success"
                );

            }else{

                $alert = array(
                    "title"     => "Giriş Başarısız!!",
                    "message"   => "Kullanıcı adınız yada parolanız hatalı",
                    "type"      => "alert-success"
                );

                redirect(base_url("kullanici/login_form"));

            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("personel"));

        }

    }

    public function logout(){

        // kullanicinin sistemden çıkış yapması için kullanılacak metot kodlamaları

        $this->session->unset_userdata("user");

        redirect(base_url());
    }

}
