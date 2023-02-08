<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_models extends CI_Model
{
    public function check_login($email, $mdp)
    {
        $query= $this->db->query('select * from Utilisateur');
        $data=array();
        $result=0;
        foreach($query->result_array() as $row){
            if($row['email']==$email && $row['mdp']==$mdp){
                $user = $this->session->set_userdata('idUser',$row['idUtilisateur']);
                //echo $_SESSION['idUser'];
                //echo $this->session->has_userdata('idUser');
                $result=1;
        }
       
        }
        return $result;
    }

}

?>