<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Head extends CI_Controller {

    public function quit(){
        $this->session->unset_userdata('idUser');
        $this->load->view('pages/login');
    }
   
    public function get_categ(){
        $this->load->model('Categorie');
        $data=array();
		$data['categ']= $this->Categorie->liste_categ();
		$this->load->helper('url');
		$this->load->view('pages/header',$data);
    }

    public function ajout_produit(){
        $this->load->model('Categorie');
        $data=array();
		$data['categ']= $this->Categorie->liste_categ();
		$this->load->helper('url');
        $this->load->view('pages/addProduct',$data);
    }

    public function list_propositions(){
        $this->load->model('propositions_models');
        $a=$this->session->userdata('idUser');
        $res['objet2']=$this->propositions_models->getobjet2($a);
        $res['demande']=$this->propositions_models->getProposition($a);
        $res['nameUser']=$this->propositions_models->UserbyId($a);
		$this->load->view('pages/propositions', $res);	
    }

    public function accueil(){
        $this->load->model('Categorie');
           $this->load->model('objets_models');
            $data=array();
            $data['categ']= $this->Categorie->liste_categ();
            $data['product']= $this->objets_models->getMyProducts($_SESSION['idUser']);
            $this->load->helper('url');
            $this->load->view('pages/accueil',$data);
    }

}

