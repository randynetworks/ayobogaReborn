<div class="main-page container pl-0 pr-0 mb-5">
	<div class="text-center my-4">
		<h1><?= $cards_masak_item['title']; ?></h1>
	</div>
	<h6 class="ban text-white p-3 text-center"><?= $cards_masak_item['info']; ?></h6>

	<? foreach ($items as $item) : ?>
	<div class="row m-0 justify-content-center">
		<div class="card rounded col-xl-5 bg-white p-3 mt-3">
			<div class="card-body">
				<h3 class="card-title text-center text-primary"><?= ($item['title']); ?></h3>
				<h4 class="text-center text-dark"><?= $item['sub_title']; ?></h4>
				<div class="text-dark">
					<p><?= auto_typography(nl2br_except_pre($item['content'])); ?></p>
				</div>
			</div>
		</div>
	</div>
	<? endforeach ?>
</div>

<br><br>
