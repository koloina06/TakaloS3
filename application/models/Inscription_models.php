<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription_models extends CI_Model
{
    public function insert_utilisateurs($nom, $prenom,$email,$mdp)
    {
       $sql="insert into Utilisateur values (null,%s,%s,%s,%s)";
       $sql= sprintf($sql,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($email),$this->db->escape($mdp));
       echo $sql;
       $this->db->query($sql);
    }

}