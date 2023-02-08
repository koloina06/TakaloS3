<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Controller {
	public function index()
	{
		$this->load->model('objets_models');
		$a['data']=$this->objets_models->all_categories();
		$this->load->view('pages/ajout_objet', $a);
	}	
	public function insert(){
		$idCategorie=$this->input->post('idCategorie');
		$description=$this->input->post('descri');
		$photo=$this->input->post('photo');	
		$prix=$this->input->post('prix');
		$this->load->model('objets_models');
		$res=$this->objets_models->insert_produits($idCategorie, $description, $photo, $prix);
		$a=$this->objets_models->insert_proprietaire($_SESSION['idUser'], $res);
		redirect('Objet/produits');
	}
	public function changing($idObjet=''){
		$this->load->model('objets_models');
		$a['objet']=$this->objets_models->selectObjet($idObjet);
		$this->load->view('pages/modifier_objet', $a);
	}
	public function produits(){
		$this->load->model('objets_models');
		$res=$this->objets_models->getMyProducts($_SESSION['idUser']);
		$this->load->view('pages/accueil');	
	}
	public function modify_product(){
		$idObjet=$this->input->get('idObjet');
		$description=$this->input->get('descri');
		$photo=$this->input->get('photo');	
		$prix=$this->input->get('prix');
		$this->load->model('objets_models');
		$res=$this->objets_models->modifier_produit($description, $photo, $prix, $idObjet);
		redirect('head/accueil');
	}
}
?>
