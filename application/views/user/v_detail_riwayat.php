<?php $this->load->view ("user/header") ?>
<h4>Tanggal : <?php echo $getNilai->tgl_quiz ?></h4>
<h4>Nilai : <?php echo $getNilai->nilai ?></h4><hr>
<!--banner-->
<ol>
	<?php foreach($get_riwayat as $row){ ?>
		<li>  <?php echo $row->pertanyaan ?></a>
			<ol type="a">
			<?php 
				$this->db->where('id_soal',$row->id_soal);
				$getJawaban = $this->db->get('jawaban')->row();
				// foreach ($getJawaban as $key) {
			?>
				<li <?php if($getJawaban->jawaban_benar=="a"){?> style="background: #67ec67;" <?php } ?>>
					<?php echo $getJawaban->jawaban_a; ?>
					<?php if($row->jawaban_siswa=="a"){?> <i class="fa fa-check-circle"></i> <?php } ?>
				</li>
				<li <?php if($getJawaban->jawaban_benar=="b"){?> style="background: #67ec67;" <?php } ?>>
					<?php echo $getJawaban->jawaban_b; ?>
					<?php if($row->jawaban_siswa=="b"){?> <i class="fa fa-check-circle"></i> <?php } ?>
				</li>
				<li <?php if($getJawaban->jawaban_benar=="c"){?> style="background: #67ec67;" <?php } ?>>
					<?php echo $getJawaban->jawaban_c; ?>
					<?php if($row->jawaban_siswa=="c"){?> <i class="fa fa-check-circle"></i> <?php } ?>
				</li>
				<li <?php if($getJawaban->jawaban_benar=="d"){?> style="background: #67ec67;" <?php } ?>>
					<?php echo $getJawaban->jawaban_d; ?>
					<?php if($row->jawaban_siswa=="d"){?> <i class="fa fa-check-circle"></i> <?php } ?>
				</li>
			
			 </ol>
		</li>
	<?php }?>
</ol>
                                                 
<?php $this->load->view ("user/footer")?>