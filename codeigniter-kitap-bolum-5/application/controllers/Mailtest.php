<?php

class Mailtest extends CI_Controller {

    public function send_mail(){

        $config = Array(
            'protocol'  => "smtp",
            'smtp_host' => "ssl://smtp.gmail.com",
            'smtp_port' => "465",
            'smtp_user' => "mailkedisi@gmail.com",
            'smtp_pass' => "short1e!",
            'starttls'  => true,
            'charset'   => "utf-8",
            'mailtype'  => "html",
            'wordwrap'  => "true",
            "newline"   => "\r\n"
        );

        $this->load->library("email", $config);

        $this->email->from("mailkedisi@gmail.com", "Gökhan Kandemir");
        $this->email->to("gokhan@gkandemir.com");
        $this->email->subject("Codeigniter 3 Framework Kitabı Çıktı!!");
        $this->email->message("Codeigniter 3 Framework Kitabını almak için kitap marketlerine gidebilirsiniz!!!!");

        $send = $this->email->send();

        if($send){

            echo "E-mail gönderme işlemi başarılıdır";

        }else{

            echo "E-mail gönderme işlemi sırasında bir problem oluştu!!";
        }

        $this->email->cc("mail adresi");
        $this->email->bcc("mail adresi");
        $this->email->attach("eklenecek dosyanın yolu");

    }

}