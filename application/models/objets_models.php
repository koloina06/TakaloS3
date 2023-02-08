<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Objets_models extends CI_Model{

        public function all_categories(){
            $sql=$this->db->query('SELECT * FROM Categorie');
            $result=array();
            foreach($sql->result_array() as $row){
                $result[]=$row;
            }
            return $result;
        }

        public function insert_produits($idCategorie, $description, $photo, $prix){
            $sql="INSERT INTO Objet VALUES (NULL, %s, %s, %s, %s) RETURNING idObjet";
            $sql=sprintf($sql, $this->db->escape($idCategorie), $this->db->escape($description), $this->db->escape($photo), $this->db->escape($prix));
            $query=$this->db->query($sql);
            $result=$query->row_array();
            return $result;
        }
        public function modifier_produit($description, $photo, $prix, $idObjet){
            $sql="UPDATE Objet SET descriptions=%s, photo=%s, prix=%d WHERE idObjet=%d";
            $sql=sprintf($sql, $this->db->escape($description), $this->db->escape($photo), $prix, $idObjet);
            echo $sql;
            $query=$this->db->query($sql);
        }  
        public function selectObjet($idObjet){
            $sql="SELECT * FROM Objet WHERE idObjet=%d";
            $sql=sprintf($sql, $idObjet);
            $query=$this->db->query($sql);
            $result=$query->row_array();
            $idObjet=$result['idObjet'];
            return $idObjet;
        }
        public function insert_proprietaire($idUtilisateur, $idObjet){
            $sql="INSERT INTO Proprietaire VALUES (%d, %d)";
            $sql=sprintf($sql, $this->db->escape($idUtilisateur), $this->db->escape($idObjet));
            $this->db->query($sql);
        }
        public function getMyProducts ($idU){
            $sql="SELECT o.* FROM Proprietaire p JOIN Objet o ON p.idObjet=o.idObjet WHERE p.idUtilisateur=%s";
            $sql=sprintf($sql, $this->db->escape($idU) );
            $query=$this->db->query($sql);
            $result=array();
            foreach($query->result_array() as $row){
                $result[]=$row;
            }
            return $result;
        }
        public function getOtherProducts ($idU, $idCateg){
            $sql="SELECT p.idUtilisateur,o.idObjet,idCategorie,descriptions,photo,prix,nom FROM Proprietaire p JOIN Objet o ON p.idObjet=o.idObjet join Utilisateur u on p.idUtilisateur=u.idUtilisateur WHERE p.idUtilisateur!=%d and o.idcategorie=%d";
            $sql=sprintf($sql, $idU, $idCateg);
            echo $sql;
            $query=$this->db->query($sql);
            $result=array();
            foreach($query->result_array() as $row){
                $result[]=$row;
            }
            return $result;
        }  
    }
?>
  