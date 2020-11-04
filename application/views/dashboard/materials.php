<div class="main-page container sm-5 mt-3 mb-3">
	<div class="text-center my-4">
		<h1>Manage Materials</h1>
	</div>
	<h6 class="ban text-white p-3 text-center">Table Pengelolaan Data material</h6>
	<!-- Button trigger modal -->
	<div class="text-center mt-4">
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
			Tambah Data Material
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
							<label for="inputPassword4">ID Material</label>
							<input name="id_material" type="text" class="form-control" id="inputPassword4" placeholder="Masukan ID Material">
						</div>
					</div>
					<div class="form-row">
					<div class="form-group col-md-6">
							<label for="inputAddress">Title</label>
							<input name="title" type="text" class="form-control" id="inputAddress" placeholder="Masukan Slug Title">
						</div>
						<div class="form-group col-md-6">
							<label for="inputAddress">Slug</label>
							<input name="slug" type="text" class="form-control" id="inputAddress" placeholder="Masukan Slug Material">
						</div>
					</div>
					<div class="form-group">
						<label for="inputAddress2">Sub Title</label>
						<input name="sub_title" type="text" class="form-control" id="inputAddress2" placeholder="Masukan Sub Title Menu">
					</div>
					<div class="form-group">
						<label for="inputAddress2">Content</label>
						<textarea name="content" type="text" class="form-control" id="inputAddress2" rows="5"></textarea>
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
		<div class="col-md-12	 mb-3 text-center">
			<div class="container content bg-white">
				<div class="card-body text-align">
					<h4 class="card-title title-card">Manage Data material</h4>
					<table class="table table-striped table-primary text-dark">
						<thead>
							<tr>
								<th class="align-middle" scope="col">No.</th>
								<th class="align-middle" scope="col">ID Menu</th>
								<th class="align-middle" scope="col">ID material</th>
								<th class="align-middle" scope="col">Title</th>
								<th class="align-middle" scope="col">Slug</th>
								<th class="align-middle" scope="col">sub Title</th>
								<th class="align-middle" scope="col">Content</th>
								<th class="align-middle" scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?$i = 1; foreach ($materials as $item) : ?>
							<tr>
								<th scope="row"><?= $i++; ?></th>
								<td><?= $item['id_menu']; ?></td>
								<td><?= $item['id_material']; ?></td>
								<td><?= $item['title']; ?></td>
								<td><?= $item['slug']; ?></td>
								<td><?= $item['sub_title']; ?></td>
								<td><?= substr($item['content'], 0, 30); ?></td>
								<td>
									<a href="" class="badge badge-success badge-sm">Edit</a>
									<a href="" class="badge badge-danger badge-sm">Delete</a>
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
