<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {


	function __construct(){
		parent::__construct();
	}
//tambahan asep
	//okesip
	public function index()
	{
		$data['title']="Beranda";
		$this -> load -> view ('user/home',$data);
	}
	public function profil_sekolah(){
		$data['title']="Profil Sekolah";
		$this->load->view('user/v_profil_sekolah',$data);
	}
	public function materi(){
		//copy ke eris
		$this->db->order_by('nama_kelas','asc');
		$data['materi']=$this->db->get('kelas')->result();
		$data['title']="Materi";
		$this->load->view('user/v_materi',$data);
	}
	public function soal(){
		$data['title']="Soal";
		$this->load->view('user/v_soal',$data);
	}
	public function pendaftaran(){
		$data['title']="Pendafataran";
		$this->load->view('user/v_pendaftaran',$data);
	}
	public function riwayat(){
		$data['title']="riwayat";
		$this->db->where('id_siswa',$this->session->userdata('id_siswa'));
		$data['get_riwayat']=$this->db->get('nilai')->result();
		$this->load->view('user/v_riwayat',$data);
	}

	public function detail_riwayat($id_nilai){
		$data['title']="detail riwayat";
		$this->db->where('id_nilai', $id_nilai);
		// $this->db->where('id_nilai', $id_nilai);
		$this->db->join('soal','soal.id_soal=riwayat_quiz.id_soal');
		$data['get_riwayat'] = $this->db->get('riwayat_quiz')->result();

		$this->db->where('id_nilai',$id_nilai);
		$data['getNilai']=$this->db->get('nilai')->row();

		$this->load->view('user/v_detail_riwayat',$data); 
	}

	public function masuk(){
		$data['title']="masuk";
		$this->load->view('user/v_masuk',$data);
	}

	public function ubahPassword(){
		// print_r($_POST);
		$password = $this->input->post('password');
		$id_siswa = $this->input->post('id_siswa');

		if(empty($password)){
			redirect(base_url('Index/profil_siswa'));
			
		}else{
			$this->db->set('password',$password);
			$this->db->where('id_siswa',$id_siswa);
			$this->db->update('siswa');
			redirect(base_url('Index/profil_siswa'));
		}
	}

	public function proses_login(){
		$nis= $this->input->post('nis');
		$password= $this->input->post('password');

		$this->db->where('nis',$nis);
		$this->db->where('password',$password);
		$cek_siswa=$this->db->get('siswa')->row();

		if($cek_siswa){
			$this->session->set_userdata('id_siswa',$cek_siswa->id_siswa);//('nama session','nilai session')
			$this->session->set_userdata('nama',$cek_siswa->nama);//('nama session','nilai session')
			// $this->session->set_flasdata('id_siswa',$cek_siswa->id_siswa);?\
		}
		// var_dump($this->session->userdata('id_siswa'));exit();
		redirect(base_url('Index/index'));
	}

	public function keluar(){
		$this->session->sess_destroy();
		redirect(base_url('Index/index'));
	}

	public function profil_siswa(){
		$data['title']='Profil';
		$id_siswa = $this->session->userdata('id_siswa');
		$this->db->where('id_siswa',$id_siswa);
		$data['get_siswa'] = $this->db->get('siswa')->row();
		$this->load->view('user/v_profil_siswa',$data);
	}
	
public function search(){
		$search = $this->input->post('search');
		$type = $this->input->post('type');
		// echo $type; die();

		if($type=="guru"){

			$data['title']="Search Guru";
			$this->db->like('guru.nama',$search);
			$this->db->join('guru','guru.id_guru=pengajar.id_guru','left');
			$this->db->join('kelas','kelas.id_kelas=pengajar.id_kelas','left');
			$this->db->join('mapel','mapel.id_mapel=pengajar.id_mapel','left');
			$this->db->join('materi','mapel.id_mapel=materi.id_mapel','left');
			$this->db->join('kategori_soal','kategori_soal.id_mapel=mapel.id_mapel','left');
			$getData = $this->db->get('pengajar')->result();

		}elseif($type=="kelas"){

			$data['title']="Search Kelas";
			$this->db->like('kelas.nama_kelas',$search);
			$this->db->join('mapel','mapel.id_kelas=kelas.id_kelas','left');
			$this->db->join('materi','mapel.id_mapel=materi.id_mapel','left');
			$this->db->join('kategori_soal','kategori_soal.id_mapel=mapel.id_mapel','left');
			$getData = $this->db->get('kelas')->result();

		}elseif($type=="mapel"){

			$data['title']="Search Mata Pelajaran";
			$this->db->like('mapel.nama_mapel',$search);
			$this->db->join('mapel','mapel.id_kelas=kelas.id_kelas','left');
			$this->db->join('materi','mapel.id_mapel=materi.id_mapel','left');
			$this->db->join('kategori_soal','kategori_soal.id_mapel=mapel.id_mapel','left');
			$getData = $this->db->get('kelas')->result();

		}elseif($type=="soal"){

			$data['title']="Search Soal";
			$this->db->like('kategori_soal.kategori',$search);
			$this->db->join('mapel','mapel.id_mapel=kategori_soal.id_mapel','left');
			$this->db->join('materi','mapel.id_mapel=materi.id_mapel','left');
			$this->db->join('kelas','mapel.id_kelas=kelas.id_kelas','left');
			$getData = $this->db->get('kategori_soal')->result();

		}elseif($type=="materi"){

			$data['title']="Search Materi";
			$this->db->like('materi.judul',$search);
			$this->db->join('mapel','mapel.id_mapel=materi.id_mapel','left');
			// $this->db->join('materi','mapel.id_mapel=materi.id_mapel','left');
			$this->db->join('kelas','mapel.id_kelas=kelas.id_kelas','left');
			$getData = $this->db->get('materi')->result();

		}

		// var_dump($getData); die();
		$data['data_search'] = $getData;
		$data['type'] = $type;
		$this->load->view('user/v_search',$data);

		
	}		
}

