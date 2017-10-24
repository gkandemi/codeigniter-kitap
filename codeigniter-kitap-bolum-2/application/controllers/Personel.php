<?php

class Personel extends CI_Controller {

    public function index(){

        $this->load->view("personel_form");

    }

    public function kaydet(){

        $personel_adi   = $this->input->post("personel_adi");
        $email          = $this->input->post("email");
        $departman      = $this->input->post("departman");

        echo $personel_adi   . "<br>";
        echo $email          . "<br>";
        echo $departman      . "<br>";

    }

    public function liste(){

        echo "Personel Listesi Burada Yer Alacaktır...";

    }

}

