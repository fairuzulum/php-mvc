<div class="container mt-3">
	<div class="row">
		<div class="col-lg-12">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-12">
			<button type="button" class="btn btn-primary tambahData" data-toggle="modal" data-target="#exampleModalCenter">
				Tambah Data Siswa
			</button>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-12">
			<form action="<?= BASEURL; ?>/siswa/cari" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="cari siswa.." name="keyword" id="keyword" autocomplete="off">
					<div class="input-group-append">
						<button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<h3>Daftar Siswa</h3>
			<ul class="list-group">
				<?php foreach ($data['swa'] as $swa) :  ?>
					<li class="list-group-item">
					 <ion-icon name="person" style="padding-right: 5px; font-size: 24px;"></ion-icon>
						<?= $swa['nama']; ?>
					</li>
					<li class="mb-1" style="list-style:none;">
						<a href="<?= BASEURL; ?>/siswa/hapus/<?= $swa['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">hapus</a>
						<a href="<?= BASEURL; ?>/siswa/ubah/<?= $swa['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#exampleModalCenter" data-id="<?= $swa['id']; ?>">edit</a>
						<a href="<?= BASEURL; ?>/siswa/detail/<?= $swa['id']; ?>" class="badge badge-primary float-right">detail</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= BASEURL; ?>/siswa/tambah" method="post">
					<input type="hidden" name="id" id="id">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama">
					</div>
					<div class="form-group">
						<label for="nis">NIS</label>
						<input type="number" class="form-control" id="nis" name="nis">
					</div>
					<div class="form-group">
						<label for="kelas">Kelas</label>
						<select class="form-control" id="kelas" name="kelas">
							<option>XII RPL 1</option>
							<option>XII RPL 2</option>
							<option>XII RPL 3</option>
							<option>XI RPL 1</option>
							<option>XI RPL 2</option>
							<option>XI RPL 3</option>
						</select>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Tambah Data</button>
				</form>
			</div>
		</div>
	</div>
</div>