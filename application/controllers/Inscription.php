<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {
	
     public function index(){
        $this->load->view('pages/inscription');
     }

	public function add_user(){
        $nom= $this->input->get('nom');
        $prenom= $this->input->get('prenom');
        $email= $this->input->get('email');
		$mdp= $this->input->get('mdp');
        $this->load->model('Inscription_models');
        $result= $this->Inscription_models->insert_utilisateurs($nom,$prenom,$email, $mdp);
        $this->load->view('pages/login');
    }

}
