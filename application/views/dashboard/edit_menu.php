<div class="main-page container sm-5 mt-3 mb-3">
	<div class="text-center my-4">
		<h1>Manage Menus</h1>
	</div>
	<h6 class="ban text-white p-3 text-center">Form Edit Data Menu</h6>
	<div class="card-deck row mt-4 justify-content-center">
		<div class="col-md-5 mb-3">
			<div class="container content bg-white">
				<div class="card-body text-dark">
					<h4 class="card-title title-card text-center">Manage Data Menu</h4>
					<?php echo form_open('dashboard/update_menu'); ?>
					<input name="id" type="text" value="<?= $item['id']; ?>" hidden>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4">ID Menu</label>
							<input name="id_menu" type="text" class="form-control" id="inputEmail4" value="<?= $item['id_menu']; ?>">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Judul Menu</label>
							<input name="title" type="text" class="form-control" id="inputPassword4" value="<?= $item['title']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="inputAddress">Slug</label>
						<input name="slug" type="text" class="form-control" id="inputAddress" value="<?= $item['slug']; ?>">
					</div>
					<div class="form-group">
						<label for="inputAddress2">Info</label>
						<textarea rows="5" name="info" type="text" class="form-control" id="inputAddress2"><?= $item['info']; ?></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Update</button>
					<a href="<?= base_url('dashboard/menus'); ?>" class="btn btn-secondary">Kembali</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
