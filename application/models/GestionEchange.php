<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GestionEchange extends CI_Model
{
    public function productById($idProduits){
        $sql="SELECT * FROM Objet where idobjet=%d";
        $sql= sprintf($sql, $idProduits);
        $query=$this->db->query($sql);
        $result=$query->row_array();
        return $result;
    }

    public function get_estimation($idProduits,$pourcentage){
        $produits= $this->GestionEchange->productById($idProduits);
        $estimation= array();
        $min= $produits['prix']-(($produits['prix']*$pourcentage)/100);
        $max= $produits['prix']+(($produits['prix']*$pourcentage)/100);
        array_push($estimation,$min);
        array_push($estimation,$max);
        return $estimation;
    }

    public function produits_par_estimation($min, $max, $id){
        $sql="SELECT * FROM Objet o JOIN Proprietaire p ON o.idObjet=p.idObjet JOIN  Utilisateur u on p.idUtilisateur=u.idUtilisateur WHERE prix >=%d AND prix<=%d AND p.idUtilisateur!=%d";
        $sql= sprintf($sql,$min,$max,$id);
        $query= $this->db->query($sql);
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }

    
}