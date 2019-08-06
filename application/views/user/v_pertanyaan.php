<?php $this->load->view ("user/header") ?>
<!--banner-->
<form action="" method="post" id="formSoal" name="formSoal">
<ol>
	<?php $no = 0; foreach ($get_soal as $pertanyaan) {
	?>
		<li><?php echo $pertanyaan->pertanyaan; ?>
		<input type="hidden" name="id_soal[<?php echo $no ?>]" value="<?php echo $pertanyaan->id_soal; ?>">
			<ol type="a">
				<?php 
					// $jwb = 'a';
					
					$this->db->order_by('id_jawaban','random');
					$this->db->where('jawaban.id_soal',$pertanyaan->id_soal);
					$getJawaban = $this->db->get('jawaban')->result();
					foreach ($getJawaban as $key){

				?>
					<li> 
						<input type="radio" name="jawaban[<?php echo $no ?>]" value="a">
						<?php echo $key->jawaban_a; ?>
					</li>
					<li> 
						<input type="radio" name="jawaban[<?php echo $no ?>]" value="b">
						<?php echo $key->jawaban_b; ?>
					</li>
					<li> 
						<input type="radio" name="jawaban[<?php echo $no ?>]" value="c">
						<?php echo $key->jawaban_c; ?>
					</li>
					<li> 
						<input type="radio" name="jawaban[<?php echo $no ?>]" value="d">
						<?php echo $key->jawaban_d; ?>
						
					</li>
				<?php  } ?>
			</ol>
		</li>
	<?php
	$no++; } ?>
</ol> 
<!-- <input type="submit" name="selesai" value="Selesai" id="selesai" class="btn btn-primary"> -->
 
<button type="button" class="btn btn-primary" onclick="getModal()">Selesai</button>
</form>   

<div class="modal fade exampleModal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" style="color: red;">Perhatian!</h2>
      </div>
      <div class="modal-body text-center">
        <p>Apakah anda sudah yakin?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cek Ulang</button>
        <button type="button" class="btn btn-primary" onclick="saveJawaban()">Yakin</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
	function getModal(){
		$('#myModal').modal('show');
	}

	function saveJawaban(){

				$('#myModal').modal('hide');
		var str = $("#formSoal").serialize();
		$.ajax({
			url: '<?php echo base_url('Soal/cek_jawaban'); ?>',
			type: 'POST',
			data: str,
			datatype: 'json',

			success:function(data){
				var output = JSON.parse(data);
				// console.log(data);
				window.location.href="<?php echo base_url('Index/riwayat'); ?>";
			}
		});
	}
</script>
<?php $this->load->view ("user/footer")?>