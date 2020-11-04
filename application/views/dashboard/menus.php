<div class="main-page container sm-5 mt-3 mb-3">
	<div class="text-center my-4">
		<h1>Manage Menus</h1>
	</div>
	<h6 class="ban text-white p-3 text-center">Table Pengelolaan Data Menu</h6>
	<!-- Button trigger modal -->
	<div class="text-center mt-4">
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
			Tambah Data Menu
		</button>
	</div>

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
						<textarea name="info" type="text" class="form-control" id="inputAddress2" placeholder="Masukan Info Menu" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php echo validation_errors(); ?>
	<div class="card-deck row mt-4 justify-content-center">
		<div class="col-md-12 mb-3 text-center">
			<div class="container content bg-white">
				<div class="card-body text-align">
					<h4 class="card-title title-card">Manage Data Menu</h4>
					<table class="table table-striped table-primary text-dark mt-3">
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
</div>
