<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_models extends CI_Model
{
    public function check_Search($mot,$idCateg)
    { 
        $sql= "SELECT descriptions, prix FROM Objet WHERE descriptions LIKE '%$mot%' AND idCategorie=".$idCateg;
       // echo $sql;
        $query=$this->db->query($sql);
        $result=array();
        foreach($query->result_array() as $row){
            $result[]=$row;
        }
        return $result;
        
    }

}