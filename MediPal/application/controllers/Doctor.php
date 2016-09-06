<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('doctor_model');
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->library('addon');
    }

    public function index() {
        try {

            $this->form_validation->set_rules('GMC_Number', 'GMC Number', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('template/head.inc.php');
                $this->load->view('template/header.php');
                $this->load->view('doctor/login.php');
                $this->load->view('template/footer.inc.php');
                $this->load->view('template/js.php');
            } else {

                // set variables from the form
                $GMC_Number = $this->input->post('GMC_Number');
                $password = $this->input->post('password');
                $encrypasswd = $this->addon->passwdHash($password);
                $sql = $this->doctor_model->check_data($GMC_Number, $encrypasswd);
                if ($sql) {

                    $id = $sql->doctor_id;
                    $fullname = $sql->firstname;
                    $this->session->set_userdata('doctor_id', $id);
                    $this->session->set_userdata('firstname', $firstname);
                    redirect('doctor/dashboard');
                } else {
                    $this->session->set_flashdata('login_failed', 'Email address or Password wrong.');
                    $this->load->view('template/head.inc.php');
                    $this->load->view('template/header.php');
                    $this->load->view('doctor/login.php');
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

            $this->form_validation->set_rules('firstname', 'Firstname', 'trim|alpha');
            $this->form_validation->set_rules('lname', 'Lastname', 'trim|alpha');
            $this->form_validation->set_rules('email_address', 'Email', 'is_unique[doctor.email]');
            $this->form_validation->set_rules('mobile_no', 'Mobile No', 'is_unique[doctor.mobile_no]');
            $this->form_validation->set_rules('password', 'Password', 'trim');
            $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|matches[password]');

            if ($this->form_validation->run() == FALSE) {

                $this->load->view('template/head.inc.php');
                $this->load->view('template/header.php');
                $this->load->view('doctor/signup.php');
                $this->load->view('template/footer.inc.php');
                $this->load->view('template/js.php');
            } else {

                $data = new stdClass();
                $fname = $this->input->post('fname');
                $lname = $this->input->post('lname');
                $Gmcno = $this->input->post('Gmcno');
                $Trust_hospital = $this->input->post('Trust_hospital');
                $email_address = $this->input->post('email_address');
                $mobile_no = $this->input->post('mobile_no');
                $password = $this->input->post('password');
                $encrypasswd = $this->addon->passwdHash($password);
                $requestdata = array(
                    'firstname' => $fname,
                    'lastname' => $lname,
                    'gmc_no' => $Gmcno,
                    'trust_hospital' => $Trust_hospital,
                    'email' => $email_address,
                    'mobile_no' => $mobile_no,
                    'passwd' => $encrypasswd,
                    'created_at' => date('Y:m:d')
                );

                $create = $this->doctor_model->create($requestdata);

                if ($create) {

                    $this->session->set_flashdata('feedback', 'Patient login succesfully');
                    $this->load->view('template/head.inc.php');
                    $this->load->view('template/header.php');
                    $this->load->view('doctor/login.php');
                    $this->load->view('template/footer.inc.php');
                    $this->load->view('template/js.php');
                } else {

                    $this->session->set_flashdata('feedback', 'Something went wrong');
                    $this->load->view('template/head.inc.php');
                    $this->load->view('template/header.php');
                    $this->load->view('doctor/signup.php');
                    $this->load->view('template/footer.inc.php');
                    $this->load->view('template/js.php');
                }
            }
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
        }
    }

    public function dashboard() {
        $this->load->view('template/head.inc.php');
        $this->load->view('template/header.php');
        $this->load->view('doctor/dashboard.php');
        $this->load->view('template/footer.inc.php');
        $this->load->view('template/js.php');
    }

    public function logout() {

        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'doctor_id' && $key != 'firstname') {
                $this->session->unset_userdata($key);
            }
        }

        $this->session->sess_destroy();
        redirect('home', 'refresh');
    }
    
    public function editProfile() {
        try {

            $data = new stdClass();
            $doctor_id = $this->session->userdata('doctor_id');
            $data->doctor_details = $this->doctor_model->doctor_data($doctor_id);
            
            $this->session->set_flashdata('login_failed', 'Email address or Password wrong.');
            $this->load->view('template/head.inc.php');
            $this->load->view('template/header.php');
            $this->load->view('doctor/editprofile.php',$data);
            $this->load->view('template/footer.inc.php');
            $this->load->view('template/js.php');
            
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
        }
        
        }
        
        public function update_doctor(){
        try {   
                //echo "hello";
                
                //$data->time =  now();
                $data = new stdClass();
                //$this->load->model('Users_model');
                               
                $data->firstname = $this->input->post('fname');
                $data->lastname = $this->input->post('lname');
                $data->gmc_no = $this->input->post('Gmcno');
                $data->trust_hospital = $this->input->post('Trust_hospital');
                $data->email = $this->input->post('email_address');
                $data->mobile_no = $this->input->post('mobile_no');
                
                $data->doctor_id = $this->session->userdata('doctor_id');
                $data->edit = $this->doctor_model->doctor_update($data);
                $this->session->set_flashdata('feedback', 'Doctor edit succesfully');
                $this->load->view('template/head.inc.php');
                $this->load->view('template/header.php');
                $this->load->view('doctor/editprofile.php',$data);
                $this->load->view('template/footer.inc.php');
                $this->load->view('template/js.php');
                
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
        }
    }
        
        //$this->session->sess_destroy();
        //redirect('home', 'refresh');
    }


