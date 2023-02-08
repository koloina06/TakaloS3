<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_models extends CI_Model
{
    public function check_login($email, $mdp)
    {
        $query= $this->db->query('SELECT * FROM Utilisateur');
        $data=array();
        $result=0;
        foreach($query->result_array() as $row){
            if($row['email']==$email && $row['mdp']==$mdp){
                $user = $this->session->set_userdata('idUser',$row['idUtilisateur']);
                $result=1;
        }
       
        }
        return $result;
    }

    public function check_loginAdmin($email, $mdp){
        $query= $this->db->query('SELECT * FROM Administrateur');
        $data=array();
        $val=0;
        $result=$query->row_array();
            if($result['email']==$email && $result['mdp']==$mdp){
                $user = $this->session->set_userdata('idAdmin',$result['idAdministrateur']);
                $val=1;
            }
            return $val;
        }
        

    public function getAdmin(){
        $sql="SELECT * FROM Administrateur";
        $query=$this->db->query($sql);
        $result=$query->row_array();
        return $result;
    }
}

?>