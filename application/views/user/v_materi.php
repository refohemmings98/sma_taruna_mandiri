<?php $this->load->view ("user/header") ?>
<!--banner-->
<ol>
<?php foreach ($materi as $row) {
	echo "<li>".$row->nama_kelas;

		$this->db->where('id_kelas',$row->id_kelas);
		$getMapel = $this->db->get('mapel')->result();
		echo "<ol type='a'>";
		foreach ($getMapel as $key) {
			echo "<li>".$key->nama_mapel;
			$this->db->where('id_mapel',$key->id_mapel);
			$getMateri = $this->db->get('materi')->result();
				echo "<ul>";
					foreach ($getMateri as $key2) {
						echo "<li><a href='".base_url('assets/uploads/materi')."/".$key2->file_materi."'>".$key2->judul."</a></li>";
					}
				echo "</ul>";
			echo "</li>";
		}
		echo "</ol>";
	echo "</li>";
} ?> 
</ol>                                                
<?php $this->load->view ("user/footer")?>