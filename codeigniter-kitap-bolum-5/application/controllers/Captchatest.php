<?php

class Captchatest extends CI_Controller{

    public function index(){

        $this->load->helper("captcha");

        $parametre = array(
            'word'          => '312GK56E',
            'img_path'      => 'captcha/',
            'img_url'       => base_url("captcha"),
            'font_path'     => 'fonts/corbel.ttf',
            'img_width'     => 200,
            'img_height'    => 75,
            'font_size'     => 20,
            'img_id'        => 'Imageid',
            'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(0, 10, 5),
                'text' => array(0, 0, 0),
                'grid' => array(10, 40, 40)
            )
        );

        $dogrulama_kodu = create_captcha($parametre);

        echo $dogrulama_kodu["image"];
    }
}
