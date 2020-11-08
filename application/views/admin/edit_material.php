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
				<h6 class="m-0 font-weight-bold text-primary">Edit Material <?= $item['title']; ?></h6>
			</div>
			<div class="card-body mb-4 p-4">
				<!-- input form -->
				<?php echo form_open('dashboard/update_material'); ?>
				<input name="id" type="text" value="<?= $item['id']; ?>" hidden>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">ID Menu</label>
						<input name="id_menu" type="text" class="form-control" id="inputEmail4" value="<?= $item['id_menu']; ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Judul Material</label>
						<input name="id_material" type="text" class="form-control" id="inputPassword4" value="<?= $item['id_material']; ?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputAddress">Title</label>
						<input name="title" type="text" class="form-control" id="inputAddress" value="<?= $item['title']; ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="inputAddress">Slug</label>
						<input name="slug" type="text" class="form-control" id="inputAddress" placeholder="Masukan Slug Material" value="<?= $item['slug']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress2">Sub Title</label>
					<input name="sub_title" type="text" class="form-control" id="inputAddress2" placeholder="Masukan Sub Title Menu" value="<?= $item['sub_title']; ?>">
				</div>
				<div class="form-group">
					<label for="inputAddress2">Content</label>
					<textarea name="content" type="text" class="form-control" id="summernote" rows="5"><?= $item['content']; ?></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
				<a href="<?= base_url('dashboard/materials'); ?>" class="btn btn-secondary">Kembali</a>
				</form>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->