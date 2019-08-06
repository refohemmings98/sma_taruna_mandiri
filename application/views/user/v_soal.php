<?php $this->load->view ("user/header") ?>
<!--banner-->
<ol>
	<?php 
		foreach ($view_kelas as $kelas) {
		?>
		<li><?php echo $kelas->nama_kelas;?>
			<ul>
				<?php 
					$this->db->where('mapel.id_kelas',$kelas->id_kelas);
					$view_mapel = $this->db->get('mapel')->result(); 
					foreach ($view_mapel as $mapel) {
					?>
						<li><?php echo $mapel->nama_mapel; ?>
							<ol>
							<?php 
								$this->db->where('kategori_soal.id_mapel',$mapel->id_mapel);
								$view_katsoal = $this->db->get('kategori_soal')->result(); 
								foreach ($view_katsoal as $kategori_soal) {
							 ?>
							 	<li><a href="<?php echo base_url('Soal/view_soal')."/".$kategori_soal->id_kategori ?>" <?php if($this->session->userdata('id_siswa')==""){?>class="btn disabled" <?php } ?>><?php echo $kategori_soal->kategori ?></a></li>
							<?php } ?>
							</ol>
						</li>
					<?php
					}
					?>
			</ul>
		</li>
	<?php
		}
	?>  
</ol>                                  
<?php $this->load->view ("user/footer")?>