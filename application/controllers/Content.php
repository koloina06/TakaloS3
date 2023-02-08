<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {
     public function get_categ($idCateg=''){
        $idUser= $_SESSION['idUser'];
        $this->load->model('objets_models');
        $data['categ']= $this->objets_models->getOtherProducts($idUser,$idCateg);
        $this->load->view('pages/autres',$data);
     }

     public function get_choix($idObj=''){
         $this->session->set_userdata('idObjet',$idObj);
         $this->load->model('Categorie');
           $this->load->model('objets_models');
            $data=array();
            $data['categ']= $this->Categorie->liste_categ();
            $data['product']= $this->objets_models->getMyProducts($_SESSION['idUser']);
            $this->load->helper('url');
            $this->load->view('pages/accueil',$data);

     }

     public function demande($idObj2='', $idRecever=''){
          $idSender= $_SESSION['idUser'];
          $idObj1=$this->session->userdata('idUser');
         $this->load->model('Demande');
         $this->Demande->add_demande($idSender, $idRecever, $idObj1, $idObj2);
         $this->session->unset_userdata('idObjet');
         $this->load->model('Categorie');
         $this->load->model('objets_models');
          $data=array();
          $data['categ']= $this->Categorie->liste_categ();
          $data['product']= $this->objets_models->getMyProducts($_SESSION['idUser']);
          $this->load->helper('url');
          $this->load->view('pages/accueil', $data);
     }

     public function accepter(){
          $idDemande= $this->input->get('idDemande');
          $this->load->model('Demande');
          $this->Demande->accepter($idDemande);
          $this->load->model('Categorie');
           $this->load->model('objets_models');
            $data=array();
            $data['categ']= $this->Categorie->liste_categ();
            $data['product']= $this->objets_models->getMyProducts($_SESSION['idUser']);
            $this->load->helper('url');
            $this->load->view('pages/accueil',$data);
     }

     public function refuser(){
          $idDemande= $this->input->get('idDemande');
          $this->load->model('Demande');
          $this->Demande->refus($idDemande);
          $this->load->model('Categorie');
           $this->load->model('objets_models');
            $data=array();
            $data['categ']= $this->Categorie->liste_categ();
            $data['product']= $this->objets_models->getMyProducts($_SESSION['idUser']);
            $this->load->helper('url');
            $this->load->view('pages/accueil',$data);
     }

}
