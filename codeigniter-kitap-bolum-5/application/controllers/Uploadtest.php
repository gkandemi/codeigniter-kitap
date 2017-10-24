<?php

class Uploadtest extends CI_Controller {

    public function index(){

        $this->load->view("upload_form");

    }

    public function upload(){

        $config['upload_path']          = 'uploads/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);

        $upload = $this->upload->do_upload("userFile");

        if($upload){

            echo "Dosya başarılı bir şekilde yüklenmiştir!!";
            echo "<pre>";
            print_r($this->upload->data());
            echo "</pre>";

        }else{

            echo "Dosya yükleme işlemi sırasında bir problem oluştu!!<br>";
            echo $this->upload->display_errors();
        }
    }

}
