<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange extends CI_Controller {

	public function prix_estimatif($pourcentage='',$idProduits=''){
        $this->load->model('GestionEchange');
        $this->load->model('Categorie');
        $data= $this->GestionEchange->get_estimation($pourcentage,$idProduits);
        $data1['categ']= $this->Categorie->liste_categ();
        $data1['produits']= $this->GestionEchange->produits_par_estimation($data[0],$data[1],$this->session->userdata('idUser'));
        $this->load->view('pages/produits_estimatif',$data1);
    }

}
?>
