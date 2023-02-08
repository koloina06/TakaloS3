<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demande extends CI_Model
{
    public function add_demande($idSend, $idReceive, $p1, $p2){
        $sql="insert into Demande values (null,%d,%d,%d,%d)"; 
        $sql= sprintf($sql,$idSend,$idReceive,$p1,$p2);
        $this->db->query($sql); 
    }

    public function refus($id){
        $select= $this->db->query("select * from demande where idDemande=$id");
        $result= $select->row_array();
        $user1=$result['idUtilisateur1'];
        $user2=$result['idUtilisateur2'];
        $obj1=$result['idObjet1'];
        $obj2=$result['idObjet2'];
        $sql="insert into Refus values (%d,%d,%d,%d)";
        $sql= sprintf($sql,$user1,$user2,$obj1,$obj2);
        $this->db->query($sql);
    }

    public function accepter($id){
        $select= $this->db->query("select * from demande where idDemande=$id");
        $result= $select->row_array();
        $user1=$result['idUtilisateur1'];
        $user2=$result['idUtilisateur2'];
        $obj1=$result['idObjet1'];
        $obj2=$result['idObjet2'];
        $update1= "update Proprietaire set idUtilisateur=$user1 where idObjet=$obj2";
        $this->db->query($update1);
        //echo $update1;
        $update2= "update Proprietaire set idUtilisateur=$user2 where idObjet=$obj1";
        $this->db->query($update2);
        //echo $update2;
        $sql="insert into Acceptation values (%d,%d,%d,%d,%d)";
        $sql= sprintf($sql,$id,$user1,$user2,$obj1,$obj2);
        $this->db->query($sql);
    }


}

