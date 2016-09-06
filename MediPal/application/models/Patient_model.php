<?php

class Patient_model extends CI_Model {

    public function create($data) {
        $sql = $this->db->insert('patient', $data);
        $id = $this->db->insert_id();
        return $id;
    }

    public function check_data($email, $encrypasswd) {

        $array = array('email'=>$email,'passwd'=>$encrypasswd);
        $sql =   $this->db->select('*')
                          ->from('patient')
                          ->where($array)
                          ->get();
                  
        return $sql->row();
    }

    public function resolve_patient_login($email, $password) {

        $this->db->select('passwd');
        $this->db->from('patient');
        $this->db->where('email', $email);
        $hash = $this->db->get()->row('passwd');
        return $this->verify_password_hash($password, $hash);
    }

    public function get_patient_id_from_email($email) {
        $this->db->select('patient_id');
        $this->db->from('patient');
        $this->db->where('email', $email);
        $patient_id = $this->db->get()->row('patient_id');
        return $patient_id;
    }

    public function get_patient($patient_id) {

        $this->db->from('patient');
        $this->db->where('patient_id', $patient_id);
        return $this->db->get()->row();
    }

    private function verify_password_hash($password, $hash) {

        return password_verify($password, $hash);
    }

}
