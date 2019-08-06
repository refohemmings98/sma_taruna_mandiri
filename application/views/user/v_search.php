<?php $this->load->view ("user/header") ?>

<!--banner-->
<?php 
	if($type=="guru"){
?>
<table class="table bordered">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Kelas</th>
		<th>Mata Pelajaran</th>
		<th>Materi</th>
		<th>Soal</th>
	</thead>
	<tbody>
		<?php $no=1; foreach ($data_search as $key) {?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $key->nama ?></td>
			<td><?php echo $key->alamat ?></td>
			<td><?php echo $key->nama_kelas?></td>
			<td><?php echo $key->nama_mapel?></td>
			<td><a href="<?php echo base_url('assets/uploads/materi')."/".$key->file_materi; ?>"><?php echo $key->judul ?></a></td>
			<td><a href="<?php echo base_url('Soal/view_soal')."/".$key->id_kategori ?>"><?php echo $key->kategori ?></a></td>
		</tr>
	<?php $no++; } ?>
	</tbody>
</table>
<?php }elseif($type=="kelas") {?>
	<table class="table bordered">
		<thead>
			<th>No</th>
			<th>Kelas</th>
			<th>Mata Pelajaran</th>
			<th>Materi</th>
			<th>Soal</th>
		</thead>
		<tbody>
			<?php $no=1; foreach ($data_search as $key) {?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $key->nama_kelas; ?></td>
					<td><?php echo $key->nama_mapel; ?></td>
					<td><a href="<?php echo base_url('assets/uploads/materi')."/".$key->file_materi; ?>"><?php echo $key->judul ?></a></td>
					<td><a href="<?php echo base_url('Soal/view_soal')."/".$key->id_kategori ?>"><?php echo $key->kategori ?></a></td>
				</tr>
			<?php $no++; } ?>
		</tbody>
	</table>
<?php }elseif($type=="mapel") {?>
	<table class="table bordered">
		<thead>
			<th>No</th>
			<th>Mata Pelajaran</th>
			<th>Kelas</th>
			<th>Materi</th>
			<th>Soal</th>
		</thead>
		<tbody>
			<?php $no=1; foreach ($data_search as $key) {?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $key->nama_mapel; ?></td>
					<td><?php echo $key->nama_kelas; ?></td>
					<td><a href="<?php echo base_url('assets/uploads/materi')."/".$key->file_materi; ?>"><?php echo $key->judul ?></a></td>
					<td><a href="<?php echo base_url('Soal/view_soal')."/".$key->id_kategori ?>"><?php echo $key->kategori ?></a></td>
				</tr>
			<?php $no++; } ?>
		</tbody>
	</table>
<?php }elseif($type=="soal") {?>
	<table class="table bordered">
		<thead>
			<th>No</th>
			<th>Soal</th>
			<th>Kelas</th>
			<th>Mata Pelajaran</th>
		</thead>
		<tbody>
			<?php $no=1; foreach ($data_search as $key) {?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><a href="<?php echo base_url('Soal/view_soal')."/".$key->id_kategori ?>"><?php echo $key->kategori ?></a></td>
					<td><?php echo $key->nama_kelas; ?></td>
					<td><?php echo $key->nama_mapel; ?></td>
				</tr>
			<?php $no++; } ?>
		</tbody>
	</table>
<?php }elseif($type=="materi") {?>
	<table class="table bordered">
		<thead>
			<th>No</th>
			<th>Kelas</th>
			<th>Mata Pelajaran</th>
			<th>Materi</th>
		</thead>
		<tbody>
			<?php $no=1; foreach ($data_search as $key) {?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $key->nama_kelas; ?></td>
					<td><?php echo $key->nama_mapel; ?></td>
					<td><a href="<?php echo base_url('assets/uploads/materi')."/".$key->file_materi; ?>"><?php echo $key->judul ?></a></td>
					
				</tr>
			<?php $no++; } ?>
		</tbody>
	</table>
<?php } ?>
<?php $this->load->view ("user/footer")?>