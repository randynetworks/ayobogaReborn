<!-- Main Content -->
<div id="content">
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

		<div class="mt-4">
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
				Tambah Data Menu
			</button>

			<div class="row mt-3">
				<div class="col-md-5">
					<form action="<?= base_url('dashboard/menus'); ?>" method="POST">
						<div class="input-group mb-3">
							<input name="keyword" type="text" class="form-control" placeholder="Cari dengan Judul..." aria-label="Recipient's username" aria-describedby="button-addon2" autocomplete="off" autofocus>
							<div class="input-group-append">
								<input type="submit" name="submit" class="btn btn-outline-primary" value="Cari!" type="button" id="button-addon2">
								<input type="submit" name="reset" class="btn btn-outline-secondary" value="Reset!" type="button" id="button-addon2">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- data table -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Table Pengelolaan Data Menu per tanggal <?= date('d F Y') ?> </h6>
			</div>
			<div class="card-body mb-4 p-4">
			<?= $this->session->flashdata('message'); ?>
				<div class="table-responsive">
					<?php echo validation_errors(); ?>
					<table class="table table-bordered mt-3 table-wrapper-scroll-y my-custom-scrollbar">
						<thead>
							<tr>
								<th class="align-middle" scope="col">No.</th>
								<th class="align-middle" scope="col">ID Menu</th>
								<th class="align-middle" scope="col">Title</th>
								<th class="align-middle" scope="col">Slug</th>
								<th class="align-middle" scope="col">Info</th>
								<th class="align-middle" scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<? if (empty($menus)) : ?>
							<tr>
								<div class="alert alert-danger text-center" role="alert">
									Data Tidak Ditemukan :(
								</div>
							</tr>
							<? endif; ?>
							<?$i = 1; foreach ($menus as $item) : ?>
							<tr>
								<th scope="row"><?= $i++; ?></th>
								<td><?= $item['id_menu']; ?></td>
								<td><?= $item['title']; ?></td>
								<td><?= $item['slug']; ?></td>
								<td><?= $item['info']; ?></td>
								<td>
									<a href="<?= base_url('dashboard/edit_menu/') . $item['id']; ?>" class="badge badge-success badge-sm">Edit</a>
									<a href="<?= base_url('dashboard/destroy_menu/') . $item['id']; ?>" class="badge badge-danger badge-sm">Delete</a>
								</td>
							</tr>
							<? endforeach; ?>

						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open('dashboard/set_menu'); ?>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">ID Menu</label>
						<input name="id_menu" type="text" class="form-control" id="inputEmail4" placeholder="Masukan ID Menu">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Judul Menu</label>
						<input name="title" type="text" class="form-control" id="inputPassword4" placeholder="Masukan Judul Menu">
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress">Slug</label>
					<input name="slug" type="text" class="form-control" id="inputAddress" placeholder="Masukan Slug Menu">
				</div>
				<div class="form-group">
					<label for="inputAddress2">Info</label>
					<textarea name="info" type="text" class="form-control" id="summernote" placeholder="Masukan Info Menu" rows="5"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
	</div>
</div>
