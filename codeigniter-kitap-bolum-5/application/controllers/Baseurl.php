<?php

class Baseurl extends CI_Controller {

    public function index(){

//        $this->load->helper("url");

        echo base_url();

    }

}