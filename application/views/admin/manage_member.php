<!-- Main Content -->
<div id="content">
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
		<?= $this->session->flashdata('message'); ?>

		<button class="btn btn-primary" data-toggle="modal" data-target="#add-data"><i class="fa fa-plus"> Add New Member</i></button>

		<br><br>
		<!-- data table -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Table Member HMISI per tanggal <?= date('d F Y') ?> </h6>
			</div>
			<div class="card-body mb-4 p-4">
				<div class="table-responsive">
					<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>#</th>
								<th>Image</th>
								<th>Full Name</th>
								<th>Department</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?
                            foreach ($members as $member) : ?>
							<tr>
								<td class="align-middle"><?= ++$start; ?></td>
								<td class="align-middle"><img height="100px" width="100px" src="<?= base_url('assets/img/SO/') . $member['img']; ?>" alt=""></td>
								<td class="align-middle"><?= $member['nama-lengkap']; ?></td>
								<td class="align-middle"><?= $member['jabatan']; ?></td>
								<td class="align-middle">
									<?= anchor('Manage_Member/edit/' . $member['id'], '<button class="btn btn-primary"><i class="far fa-edit"> Edit</i></button>'); ?>
									|
									<?= anchor('Manage_Member/hapus/' . $member['id'], '<button onclick="javascript: return confirm(\'want to delete?\')" class="btn btn-danger"><i class="far fa-trash-alt"> Del</i></button>'); ?>

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
					<h5 class="modal-title" id="add-data-member">Input Data Member HMISI</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- input form -->
					<?= form_open_multipart('Manage_Member/create') ?>
					<div class="card shadow">
						<div class="card-body p-4">
							<div class="form-group">
								<label for="fullname">Full Name*</label>
								<input name="full-name" type="text" class="form-control" id="fullname" placeholder="Please Input Full Name Member.">
							</div>
							<div class="form-group">
								<label for="department">Department*</label>
								<input name="depart" type="text" class="form-control" id="department" placeholder="Please Input Department">
							</div>
							<div class="form-group ">

								<label for="image">Upload Image*</label>
								<input name="image" type="file" class="form-control pb-1" id="upload-image">
							</div>
							<div>
								<button type="submit" class="btn btn-primary"><i class="far fa-save"> Submit</i></button>
								<button type="reset" class="btn btn-warning"><i class="fas fa-redo-alt"> Reset</i></button>
							</div>
							<hr>
							<p class="disable">* Required</p>
						</div>
					</div>
					<?= form_close(); ?>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- End of Main Content -->
