<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demande extends CI_Model
{
    public function add_demande($idSend, $idReceive, $p1, $p2){
        $sql="INSERT INTO Demande VALUES (NULL, %d, %d, %d, %d)"; 
        $sql= sprintf($sql,$idSend,$idReceive,$p1,$p2);
        $this->db->query($sql); 
    }

    public function refus($id){
        $select= $this->db->query("SELECT * FROM Demande WHERE idDemande=$id");
        $result= $select->row_array();
        $user1=$result['idUtilisateur1'];
        $user2=$result['idUtilisateur2'];
        $obj1=$result['idObjet1'];
        $obj2=$result['idObjet2'];
        $sql="INSERT INTO Refus VALUES (%d, %d, %d, %d)";
        $sql= sprintf($sql, $user1, $user2, $obj1, $obj2);
        $this->db->query($sql);
    }

    public function accepter($id){
        $select= $this->db->query("SELECT * FROM Demande WHERE idDemande=$id");
        $result= $select->row_array();
        $user1=$result['idUtilisateur1'];
        $user2=$result['idUtilisateur2'];
        $obj1=$result['idObjet1'];
        $obj2=$result['idObjet2'];
        $update1= "UPDATE Proprietaire SET idUtilisateur=$user1 WHERE idObjet=$obj2";
        $this->db->query($update1);
        $update2= "UPDATE Proprietaire SET idUtilisateur=$user2 WHERE idObjet=$obj1";
        $this->db->query($update2);
        $sql="INSERT INTO Acceptation VALUES (%d, %d, %d, %d, %d)";
        $sql= sprintf($sql, $id, $user1, $user2, $obj1, $obj2);
        $this->db->query($sql);
    }


}

