<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('patient_model');
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->library('addon');
    }

    public function index() {
        try {

            $this->form_validation->set_rules('email_address', 'Email address', 'valid_email');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('template/head.inc.php');
                $this->load->view('template/header.php');
                $this->load->view('patient/login.php');
                $this->load->view('template/footer.inc.php');
                $this->load->view('template/js.php');
            } else {

                // set variables from the form
                $email = $this->input->post('email_address');
                $password = $this->input->post('password');
                $encrypasswd = $this->addon->passwdHash($password);
                $sql = $this->patient_model->check_data($email, $encrypasswd);
                if ($sql) {
                       
                  $id =   $sql->patient_id;  
                  $fullname =   $sql->firstname;  
                  $this->session->set_userdata('patient_id', $id);
                  $this->session->set_userdata('firstname', $firstname);    
                  redirect('patient/dashboard');
                        
                } else {
                    $this->session->set_flashdata('login_failed', 'Email address or Password wrong.');
                    $this->load->view('template/head.inc.php');
                    $this->load->view('template/header.php');
                    $this->load->view('patient/login.php');
                    $this->load->view('template/footer.inc.php');
                    $this->load->view('template/js.php');
                }
            }
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
        }
    }

    public function signup() {
        try {

            $this->form_validation->set_rules('fname', 'Firstname', 'trim|alpha');
            $this->form_validation->set_rules('lname', 'Lastname', 'trim|alpha');
            $this->form_validation->set_rules('add1', 'Address 1', 'trim');
            $this->form_validation->set_rules('mobile', 'Mobile No', 'is_unique[patient.mobile_no]');
            $this->form_validation->set_rules('email_address', 'Email', 'is_unique[patient.email]');
            $this->form_validation->set_rules('password', 'Password', 'trim');
            $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|matches[password]');

            if ($this->form_validation->run() == FALSE) {

                $this->load->view('template/head.inc.php');
                $this->load->view('template/header.php');
                $this->load->view('patient/signup.php');
                $this->load->view('template/footer.inc.php');
                $this->load->view('template/js.php');
            } else {

                $data = new stdClass();
                $fname = $this->input->post('fname');
                $lname = $this->input->post('lname');
                $dobirth = $this->input->post('dobirth');
                $pgender = $this->input->post('pgender');
                $add1 = $this->input->post('add1');
                $add2 = $this->input->post('add2');
                $add3 = $this->input->post('add3');
                $pcode = $this->input->post('pcode');
                $nhs_num = $this->input->post('nhs_num');
                $mobile = $this->input->post('mobile');
                $email_address = $this->input->post('email_address');
                $password = $this->input->post('password');
                $encrypasswd = $this->addon->passwdHash($password);
                $requestdata = array(
                    'firstname' => $fname,
                    'lastname'  => $lname,
                    'dob'       => $dobirth,
                    'gender'    => $pgender,
                    'address1'  => $add2,
                    'address2'  => $add2,
                    'address3'  => $add3,
                    'postcode'  => $pcode,
                    'nhs_number' => $nhs_num,
                    'mobile_no' => $mobile,
                    'email'     => $email_address,
                    'passwd'    => $encrypasswd,
                    'craeted_at' => date('Y:m:d')
                );

                $create = $this->patient_model->create($requestdata);

                if ($create) {

                    $this->session->set_flashdata('feedback', 'Patient login succesfully');
                    $this->load->view('template/head.inc.php');
                    $this->load->view('template/header.php');
                    $this->load->view('patient/login.php');
                    $this->load->view('template/footer.inc.php');
                    $this->load->view('template/js.php');
                } else {

                    $this->session->set_flashdata('feedback', 'Something went wrong');
                    $this->load->view('template/head.inc.php');
                    $this->load->view('template/header.php');
                    $this->load->view('patient/signup.php');
                    $this->load->view('template/footer.inc.php');
                    $this->load->view('template/js.php');
                }
            }
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
        }
    }

    public function forgotpasswd() {

        $this->load->view('template/head.inc.php');
        $this->load->view('template/header.php');
        $this->load->view('patient/forgotpasswd.php');
        $this->load->view('template/footer.inc.php');
        $this->load->view('template/js.php');
    }
    
    public function dashboard(){
        
        $this->load->view('template/head.inc.php');
        $this->load->view('template/header.php');
        $this->load->view('patient/dashboard.php');
        $this->load->view('template/footer.inc.php');
        $this->load->view('template/js.php');
        
    }
    
     public function newepisode(){
        
        $this->load->view('template/head.inc.php');
        $this->load->view('template/header.php');
        $this->load->view('patient/newepisod.php');
        $this->load->view('template/footer.inc.php');
        $this->load->view('template/js.php');
        
    }
    public function doctorlist(){
        
        $this->load->view('template/head.inc.php');
        $this->load->view('template/header.php');
        $this->load->view('patient/doctorlist.php');
        $this->load->view('template/footer.inc.php');
        $this->load->view('template/js.php');
        
    }
    
    
    
    public function logout() {

        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'patient_id'  && $key != 'firstname' ) {
                $this->session->unset_userdata($key);
            }
        }
        
        $this->session->sess_destroy();
        redirect('patient','refresh');
    
   }
    
    
}
