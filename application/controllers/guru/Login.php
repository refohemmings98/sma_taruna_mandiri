<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_loginguru');
    }

    public function index(){
        // halaman login, kalau sudah login, maka pindah ke halaman dashboard admin
        if($this->session->userdata('login_guru'))
            redirect('guru/dashboard');

        if(isset($_POST['login'])){
            $data['result'] = $this->M_loginguru->login();
            $this->load->view('guru/v_loginguru',$data);
        } else {
            $this->load->view('guru/v_loginguru');
        }

    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('guru/login');
    }
}