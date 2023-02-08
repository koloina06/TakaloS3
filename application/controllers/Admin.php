<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->model('Gestioncateg');
        $idCategorie=$this->input->post('idCategorie');
        $categorie=$this->input->post('categorie');
		$a['data']=$this->Gestioncateg->modifycategorie($id, $categorie);
		$this->load->view('pages/admin', $a);
	}    
    public function insert()
	{
		$this->load->model('Gestioncateg');
        $categorie=$this->input->get('categorie');
		$a['data']=$this->Gestioncateg->insert_categorie($categorie);
		$this->load->model('Categorie');
		$data['categ']= $this->Categorie->liste_categ();
		$this->load->view('pages/accueilAdmin',$data);
	}
	 public function add_categ(){
		$this->load->view('pages/category_insert');
	 }

	 public function accueilBack(){
		$this->load->model('Categorie');
        $data['categ']= $this->Categorie->liste_categ();
        $this->load->view('pages/accueilAdmin',$data);
	 }

	 public function stat(){
		$this->load->model('Gestioncateg');
		$data['inscrits']=$this->Gestioncateg->getUtilisateurInscrit();
		$data['echange']=$this->Gestioncateg->getEchange();
		$this->load->view('pages/statistiques',$data);
	 }

	 public function quit(){
        $this->session->unset_userdata('idAdmin');
        $this->load->view('pages/login');
    }
}
?>
