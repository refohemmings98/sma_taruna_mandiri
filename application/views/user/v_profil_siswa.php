<?php $this->load->view ("user/header") ?>
<style type="text/css">
	.row{
		margin-top: 5px;
	}
</style>
<form action="<?php echo base_url('Index/ubahPassword') ?>" method="post">
<div class="col-md-10">
	<div class="row">
		<div class="col-md-2">
			<label> Nama </label>
		</div>
		<div class="col-md-6">
			<input type="text" name="" class="form-control" disabled="" value="<?php echo $get_siswa->nama; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<label> NIS </label>
		</div>
		<div class="col-md-6">
			<input type="text" name="" class="form-control" disabled="" value="<?php echo $get_siswa->nis; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<label> Tanggal Lahir </label>
		</div>
		<div class="col-md-6">
			<input type="text" name="" class="form-control" disabled="" value="<?php echo $get_siswa->tanggal_lahir; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<label> Jenis Kelamin </label>
		</div>
		<div class="col-md-6">
			<input type="text" name="" class="form-control" disabled="" value="<?php echo $get_siswa->jenis_kelamin; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<label> Alamat </label>
		</div>
		<div class="col-md-6">
			<textarea class="form-control" disabled="">
				<?php echo strip_tags($get_siswa->alamat) ?>
			</textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<label> Password </label>
		</div>
		<div class="col-md-6">
			<input type="password" name="password" id="password" class="form-control">
			<input type="hidden" name="id_siswa" id="id_siswa" value="<?php echo $get_siswa->id_siswa; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 text-right">
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</div>
		
	</div>
</div>
</form>
<?php $this->load->view ("user/footer")?>