<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

	    $sayi_1 = 10;
        $sayi_2 = 20;
        $toplam = $sayi_1 + $sayi_2;


        $viewData = array(
            "sayi1"     => $sayi_1,
            "sayi2"     => $sayi_2,
            "toplam"    => $toplam
        );


        $viewData2 = new stdClass();

        $viewData2->sayi1  = $sayi_1;
        $viewData2->sayi2  = $sayi_2;
        $viewData2->toplam = $toplam;



		$this->load->view('test_view', $viewData2);
	}
}
