<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller {

    function index() {

        $cat = isset($_GET['cat']) ? $_GET['cat'] : "0";
        switch ($cat) {
            case 'patient':
                $this->load->view("RegisterView_patient");
                break;
            case 'physician':
                $this->load->view("RegisterView_physician ");
            default:
                break;
        }
        echo $cat.": registiration form VIEW gose here ";
    }

}
