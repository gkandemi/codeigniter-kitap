<?php

class Sessiontest extends CI_Controller {

    public function set_session(){

        $this->session->set_userdata("kitap", "Codeigniter 3 Framework");

        $personel = array(
            "personel_adi"  => "Gökhan Kandemir",
            "kanal_adi"     => "kablosuzkedi",
            "domain"        => "youtube.com",
            "web1"          => "www.kablosuzkedi.com",
            "web2"          => "www.yazilimegitim.com",
            "web3"          => "www.gkandemir.com",
        );

        $this->session->set_userdata("personel", $personel);
    }

    public function get_session(){

        echo $this->session->userdata("personel");

    }

    public function get_session_list(){

        print_r($this->session->all_userdata());

    }

    public function unset_session(){

        $this->session->unset_userdata("kitap");

    }

}