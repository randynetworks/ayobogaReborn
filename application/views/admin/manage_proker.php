<!-- Main Content -->
<div id="content">
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
		<?= $this->session->flashdata('message'); ?>

		<button class="btn btn-primary" data-toggle="modal" data-target="#add-data"><i class="fa fa-plus"> Add Proker</i></button>

		<br><br>
		<!-- data table -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Table Proker HMISI per tanggal <?= date('d F Y') ?> </h6>
			</div>
			<div class="card-body mb-4 p-4">
				<div class="table-responsive">
					<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>#</th>
								<th>img</th>
								<th>slug</th>
								<th>text</th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
							<?
							$start = 0;
                            foreach ($prokers as $proker) : ?>
							<tr>
								<td class="align-middle"><?= ++$start; ?></td>
								<td class="align-middle"><img height="100px" width="100px" src="<?= base_url('assets/img/proker-img/') . $proker['img']; ?>" alt=""></td>
								<td class="align-middle"><?= $proker['slug']; ?></td>
								<td class="align-middle"><?= $proker['text']; ?></td>
								<td class="align-middle">
									<?= anchor('Manage_Proker/edit/' . $proker['id'], '<button href="" class="btn btn-primary"><i class="far fa-edit"> Edit</i></button>'); ?>
									|
									<?= anchor('Manage_Proker/hapus/' . $proker['id'], '<button onclick="javascript: return confirm(\'want to delete?\')" class="btn btn-danger"><i class="far fa-trash-alt"> Del</i></button>'); ?>

								</td>
							</tr>
							<? endforeach; ?>
						</tbody>
					</table>
					<br>
					<?= $this->pagination->create_links(); ?>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container-fluid -->

	<!-- Modal -->
	<div class="modal fade" id="add-data" tabindex="-1" role="dialog" aria-labelledby="add-data-member" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="add-data-member">Input Data Proker HMISI</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?= form_open_multipart('Manage_Proker/create') ?>
					<div class="card shadow">
						<div class="card-body mb-4 p-4">
							<div class="form-group">
								<label for="img">Upload Image</label>
								<div class="custom-file">
									<input name="image" type="file" class="custom-file-input" id="upload-image">
									<label name="img" class="custom-file-label" for="upload-image">Choose file</label>
								</div>
							</div>
							<div class="form-group">
								<label for="text">Text</label>
								<input name="text" type="text" class="form-control" id="text" placeholder="Please Input Text.">
							</div>
							<div class="form-group">
								<label for="slug">Slug</label>
								<input name="slug" type="text" class="form-control" id="slug" placeholder="Please Input slug.">
							</div>
							<div>
								<button type="submit" class="btn btn-primary"><i class="far fa-save"> Submit</i></button>
								<button type="reset" class="btn btn-warning"><i class="fas fa-redo-alt"> Reset</i></button>
							</div>
						</div>
					</div>
					<?= form_close(); ?>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
