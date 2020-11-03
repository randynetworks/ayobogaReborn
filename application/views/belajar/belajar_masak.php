<div class="main-page container sm-5 mt-3 mb-3">
	<div class="text-center my-4">
		<h1>Sudah siap belajar masak?</h1>
		<br>
	</div>
	<h6 class="ban text-white p-3 text-center">Tenang aja, semua belajar dari awal kok, engga ada yang namanya telat!</h6>
	<div class="card-deck row mt-4">
		<?foreach ($cards_masak as $cardMasak) : ?>
		<div class="col-md-4 mb-3 text-center">
			<div class="container content bg-white ">
				<div class="card-body text-align">
					<h4 class="card-title title-card"><a href="<?= base_url('belajar/view_masak/' . $cardMasak['slug']); ?>" class="hover-link"><?= $cardMasak['title']; ?></a></h4>
					<p class="card-text text-dark"><?= $cardMasak['info']; ?></p>
				</div>
			</div>
		</div>
		<?endforeach?>
	</div>
</div>
