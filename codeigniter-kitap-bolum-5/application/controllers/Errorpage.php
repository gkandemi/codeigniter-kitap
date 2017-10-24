<?php

class Errorpage extends CI_Controller {

    public function error(){

        $this->load->view("error_page");
    }

}