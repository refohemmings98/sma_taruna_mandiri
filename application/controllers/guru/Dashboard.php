<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
         if(!$this->session->userdata('login_guru')){
            redirect('guru/login');
        }
    }

    function index(){
        // echo "hgjgh"; die();
        $data['active']     = 'dash';
        $data['judul_1']    = 'Dashboard';
        $data['judul_2']    = 'Selamat Datang';
        $data['page']       = 'v_dashboard';
        $data['menu']       = $this->Menus->generateMenu('Guru');
        $data['breadcumbs'] = array(
            array(
                'nama'=>'Dashboard',
                'icon'=>'fa fa-dashboard',
                'url'=>'guru/dashboard'
            ),
        );

        $this->load->view('guru/'.$this->session->userdata('theme').'/v_index',$data);
    }
}