<!-- Main Content -->
<div id="content">
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

		<!-- data table -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Table Admin website HMISI per tanggal <?= date('d F Y') ?> </h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Image</th>
								<th>Role Id</th>
								<th>Is Active</th>
								<th>Date Create</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<? foreach ($admin_list as $admin) : ?>
							<tr>
								<td class="align-middle"><?= $admin['name']; ?></td>
								<td class="align-middle"><?= $admin['email']; ?></td>
								<td class="align-middle"><img height="100px" width="100px" src="<?= base_url('assets/img/profile/') . $admin['image']; ?>" alt=""></td>
								<td class="align-middle"><?= $admin['role_id']; ?></td>
								<td class="align-middle"><?= $admin['is_active']; ?></td>
								<td class="align-middle">Admin since <?= date('d F Y', $admin['date_created']) ?></td>
								<td class="align-middle">
									<button class="btn btn-primary"><i class="far fa-edit"> Edit</i></button> |
									<button class="btn btn-danger"><i class="far fa-trash-alt"> Del</i></button>
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