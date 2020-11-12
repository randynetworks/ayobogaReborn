<!-- Main Content -->
<div id="content">
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
		<?= $this->session->flashdata('message'); ?>

		<!-- data table -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Edit Admin <?= $item['name']; ?></h6>
			</div>
			<div class="card-body mb-4 p-4">
				<!-- input form -->
				<?php echo form_open('dashboard/update_admin'); ?>
				<input name="id" type="text" value="<?= $item['id']; ?>" hidden>
				<div class="form-group">
					<label for="inputAddress">Role Id</label>
					<input name="role_id" type="text" class="form-control" id="inputAddress" value="<?= $item['role_id']; ?>">
					<small id="emailHelp" class="form-text text-muted">( 1 ) For Administrator.</small>
					<small id="emailHelp" class="form-text text-muted">( 2 ) For Data Entry.</small>
				</div>
				<div class="form-group">
					<label for="inputAddress">Is Active?</label>
					<input name="is_active" type="text" class="form-control" id="inputAddress" value="<?= $item['is_active']; ?>">
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
				<a href="<?= base_url('dashboard/admin_list'); ?>" class="btn btn-secondary">Kembali</a>
				</form>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
