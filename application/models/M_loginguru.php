<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_loginguru extends CI_Model {

    function login(){

        try {
            $username = $this->input->post('email', true);
            $password = $this->input->post('password', true);
            $result = $this->db->get_where('guru',array(
                                'username' => $username,
                                'password' => $password))->row();

            if($result){
                $this->session->set_userdata('login_guru',true);
                $this->session->set_userdata('nama',$result->nama);
                $this->session->set_userdata('type','Guru');
                $this->session->set_userdata('theme','sb_admin');


                redirect('guru/dashboard');
            } else {
                return "Maaf, Email atau Password Anda Salah !";
            }

        } catch(Exception $e){
            return $e->getMessage();
        }
    }
}