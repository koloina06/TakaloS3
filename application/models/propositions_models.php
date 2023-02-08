<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Propositions_models extends CI_Model{

        public function getobjet2($idUtilisateur){
            $sql="SELECT o.descriptions FROM Demande d  JOIN Objet o ON d.idObjet2=o.idObjet WHERE d.idUtilisateur2=%s ";
            $sql=sprintf($sql, $idUtilisateur);
           // echo $sql;
            $query=$this->db->query($sql);
            $result=array();
            foreach($query->result_array() as $row){
                $result[]=$row;
            }
            return $result;
        }
        public function getProposition($idUtilisateur){
            $sql="SELECT d.*, o.*, u.* FROM Demande d  JOIN Objet o ON d.idObjet1=o.idObjet JOIN Utilisateur u ON d.idUtilisateur2=u.idUtilisateur WHERE d.idUtilisateur2=%s  AND d.idDemande NOT IN (SELECT idDemande FROM Acceptation) AND d.idDemande NOT IN (SELECT idDemande FROM Refus)";
            $sql=sprintf($sql, $idUtilisateur);
             //echo $sql;
            $query=$this->db->query($sql);
            $result=array();
            foreach($query->result_array() as $row){
                $result[]=$row;
            }
            return $result;
        }
        public function UserbyId($id){
            $sql="SELECT * FROM Utilisateur WHERE idUtilisateur=%d";
            $sql= sprintf($sql, $id);
            $query=$this->db->query($sql);
            $result=$query->row_array();
            return $result;
        }
        
} ?>