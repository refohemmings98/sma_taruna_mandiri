<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {


	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['view_kelas']=$this->db->get('kelas')->result();
		$data['title']="Soal";
		$this -> load -> view ('user/v_soal',$data);
	}

	public function view_soal($id_kategori){

		// $this->db->limit(1);
		$this->db->order_by('id_soal','random');
		$this->db->where('soal.id_kategori',$id_kategori);
		$this->db->join('kategori_soal','kategori_soal.id_kategori=soal.id_kategori');
		$this->db->join('mapel','mapel.id_mapel=kategori_soal.id_mapel');
		$sql = $this->db->get('soal');

		$data['get_soal'] = $sql->result();

		$getdata = $sql->row();
		
		$data['title'] = $getdata->nama_mapel;
		$this->load->view('user/v_pertanyaan',$data);
	}

	public function cek_jawaban(){
		$id_soal = $this->input->post('id_soal');
		$total = count($id_soal);
		$jawaban = $this->input->post('jawaban');
		$id_siswa = $this->session->userdata('id_siswa');

		// var_dump($id_soal); exit();
		$totalBenar = 0;
		$totalSalah = 0;
		for ($i=0; $i < $total; $i++) { 
			if(!empty($jawaban[$i])){
				$benar = $this->cek_soal_benar($id_soal[$i], $jawaban[$i]);

			}else{
				$benar = 0;

			}

			if($benar != 0){
				$totalBenar = $totalBenar + 1;
			}else{
				$totalSalah = $totalSalah + 1;
			}
		}
		$this->db->set('id_siswa',$id_siswa);
		$this->db->set('nilai',$totalBenar);
		$this->db->set('tgl_quiz',date('Y-m-d H:i:s'));
		$this->db->insert('nilai');

		$id_nilai = $this->db->insert_id();

		for ($i=0; $i < $total; $i++) { 
			if(!empty($jawaban[$i])){
				$this->db->set('id_nilai',$id_nilai);
				$this->db->set('id_soal',$id_soal[$i]);
				$this->db->set('id_siswa',$id_siswa);
				$this->db->set('jawaban_siswa',$jawaban[$i]);
				$this->db->insert('riwayat_quiz');

			}else{
				$this->db->set('id_nilai',$id_nilai);
				$this->db->set('id_soal',$id_soal[$i]);
				$this->db->set('id_siswa',$id_siswa);
				$this->db->set('jawaban_siswa','');
				$this->db->insert('riwayat_quiz');
			}
		}

		// redirect(base_url('Index/riwayat'));
		$data = json_decode('success');

		echo json_encode('success');

		// echo "benar: ".$totalBenar;
		// echo "<br>Salah: ".$totalSalah;
		// exit();
	}

	public function cek_soal_benar($id_soal, $jawaban){

		$this->db->where('id_soal',$id_soal);
		$getjawaban = $this->db->get('jawaban')->row();

			$jawabanbenar = $getjawaban->jawaban_benar;

			$benar = 0;
			if($jawabanbenar == $jawaban){
				$benar = $benar + 1;
			}
		
		return $benar;
	}

}