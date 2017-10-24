<?php

function get_user(){

    $CI = &get_instance();
    $user = $CI->session->userdata("user");

    return $user;

}
