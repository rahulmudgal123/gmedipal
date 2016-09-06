<?php

class Doctor_model extends CI_Model {

    public function create($data) {
        $sql = $this->db->insert('doctor', $data);
        $id = $this->db->insert_id();
        return $id;
    }

    public function check_data($GMC_Number, $encrypasswd) {

        $array = array('gmc_no'=>$GMC_Number,'passwd'=>$encrypasswd);
        $sql =   $this->db->select('*')
                          ->from('doctor')
                          ->where($array)
                          ->get();
                  
        return $sql->row();
    }

   
}
