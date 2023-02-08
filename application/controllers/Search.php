<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {


	public function check_Search(){
        $mot= $this->input->get('mot');
		$idCateg= $this->input->get('idCateg');
        $this->load->model('Search_models');
        $this->load->model('Categorie');
        $result['resultat']= $this->Search_models->check_Search($mot,$idCateg);
        $result['categ']= $this->Categorie->liste_categ();
        $this->load->helper('url');
        $this->load->view('pages/Recherche',$result);
    }
    

   

}

