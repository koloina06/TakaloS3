<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Heads_models extends CI_Model
{
    public function deconnect(){
        $this->session->unset_userdata('idUser');
    }
}