<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

     public function index(){
        $this->load->view('pages/login');
     }

	public function check_login(){
        $email= $this->input->get('email');
		$mdp= $this->input->get('mdp');
        $this->load->model('Login_models');
        $result= $this->Login_models->check_login($email, $mdp);
        if($result==1){
           $this->load->model('Categorie');
           $this->load->model('objets_models');
            $data=array();
            $idUser=$_SESSION['idUser'];
            $data['categ']= $this->Categorie->liste_categ();
            $data['product']= $this->objets_models->getMyProducts($idUser);
            $this->load->helper('url');
            $this->load->view('pages/accueil',$data);
        }else{
            $this->load->view('pages/login');
        }
    }

    public function check_logAdmin(){
        $email= $this->input->get('email');
		$mdp= $this->input->get('mdp');
        $this->load->model('Login_models');
        $result= $this->Login_models->check_loginAdmin($email, $mdp);
        if($result==1){
            $this->load->model('Categorie');
            $data['categ']= $this->Categorie->liste_categ();
            $this->load->view('pages/accueilAdmin',$data);
        }else{
            $this->load->model('Login_models');
            $result['admin']= $this->Login_models->getAdmin();
            $this->load->view('pages/log_admin',$result);
        }   
    }

    public function show_Admin(){
        $this->load->model('Login_models');
        $result['admin']= $this->Login_models->getAdmin();
        $this->load->view('pages/log_admin',$result);
    }

}

