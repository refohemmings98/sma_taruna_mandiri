<?php $this->load->view ("user/header") ?>
<!--banner-->
<ol>
	<?php foreach($get_riwayat as $row){ ?>
		<li> <a href="<?php echo base_url('Index/detail_riwayat')."/".$row->id_nilai ?>"><?php echo $row->tgl_quiz ?> | <?php echo $row->nilai ?></a> </li>
	<?php }?>
</ol>
                                                 
<?php $this->load->view ("user/footer")?>