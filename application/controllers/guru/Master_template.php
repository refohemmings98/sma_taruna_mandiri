<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Super.php');

class Master_template extends Super //class mengikuti nama file. diawali dengan huruf besar
{
    
    function __construct()
    {
        parent::__construct();
        $this->language       = 'english'; /** Indonesian / english **/
        $this->tema           = "flexigrid"; /** datatables / flexigrid **/
        $this->tabel          = "kategori"; //nama tabel sesuai dengan nama yg ada di database
        $this->active_id_menu = "kategori";
        $this->nama_view      = "Kategori"; //tampilan untuk di view
        $this->status         = true; 
        $this->field_tambah   = array(); 
        $this->field_edit     = array(); 
        $this->field_tampil   = array(); 
        $this->folder_upload  = 'assets/uploads/files';
        $this->add            = true;
        $this->edit           = true;
        $this->delete         = true;
        $this->crud;
    }

    function index(){
            $data = [];
            /** Bagian GROCERY CRUD USER**/


            /** Relasi Antar Tabel 
            * @parameter (nama_field_ditabel_ini, tabel_relasi, field_dari_tabel_relasinya)
            **/
            //$this->crud->set_relation('parent_menu','tjm_menu','nama_menu');

            /** Upload **/
            // $this->crud->set_field_upload('nama_field_upload',$this->folder_upload);  
            
            /** Ubah Nama yang akan ditampilkan**/
            // $this->crud->display_as('nama','Nama Setelah di Edit')
            //     ->display_as('email','Email Setelah di Edit'); 
            
            /** Akhir Bagian GROCERY CRUD Edit Oleh User**/
            $data = array_merge($data,$this->generateBreadcumbs());
            $data = array_merge($data,$this->generateData());
            $this->generate();
            $data['output'] = $this->crud->render();
            $this->load->view('guru/'.$this->session->userdata('theme').'/v_index',$data);
    }

    private function generateBreadcumbs(){
        $data['breadcumbs'] = array(
                array(
                    'nama'=>'Dashboard',
                    'icon'=>'fa fa-dashboard',
                    'url'=>'guru/dashboard'
                ),
                array(
                    'nama'=>'Admin',
                    'icon'=>'fa fa-users',
                    'url'=>'guru/userguru'
                ),
            );
        return $data;
    }
}