<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Gestioncateg extends CI_Model{

        public function insert_categorie($categorie){
            $sql="INSERT INTO Categorie VALUES (NULL, %s)";
            $sql=sprintf($sql, $this->db->escape($categorie));
            $result=$this->db->query($sql);
            return $result;
        } 
        public function modify_categorie($id, $categorie){
            $sql="UPDATE Categorie SET  idCategorie=%d WHERE categorie=%s";
            $sql=sprintf($sql,$id, $this->db->escape($categorie));
            $result=$this->db->query($sql);
            return $result;
        }
        public function getUtilisateurInscrit(){
            $sql=$this->db->query('SELECT count(*) nbr FROM Utilisateur');
            $result=$sql->row_array();
            return $result;
        }

        public function getEchange(){
            $sql=$this->db->query('SELECT count(*) nbr FROM Acceptation');
            $result=$sql->row_array();
            return $result;
        }
    }
?>
  