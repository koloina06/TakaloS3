<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Model
{
    public function liste_categ()
    {
        $query= $this->db->query('SELECT * FROM Categorie');
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }

    public function add_categ($nom){
        $sql="INSERT INTO Categorie VALUES (NULL, %s)";
        $sql= sprintf($sql,$this->db->escape($nom));
        $this->db->query($sql);
    }
}