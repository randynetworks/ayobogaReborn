<div class="main-page container sm-5 mt-3 mb-3">
	<div class="text-center my-4">
		<h1>Manage Materials</h1>
	</div>
	<h6 class="ban text-white p-3 text-center">Table Pengelolaan Data material</h6>
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
