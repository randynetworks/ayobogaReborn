<div class="main-page container pl-0 pr-0 mt-5 mb-5">
	<div class="text-center">
		<h1 class="judul"><?= $cards_service_item['title']; ?></h1>
		<br>
	</div>
	<h6 class="ban text-white p-3 text-center"><?= $cards_service_item['sub_title']; ?></h6>

	<div class="card-deck row m-0 justify-content-center">
		<? foreach ($items as $item) : ?>
		<div class="container content bg-white p-3 mt-3">
			<div class="card-body">
				<h1 class="card-title text-center text-primary"><?= ($item['title']); ?></h1>
				<h3 class="text-center text-dark"><?= $item['sub_title']; ?></h3>
				<p class="text-center text-dark"><?= $item['create_by']; ?></p>
				<div class="text-dark">
					<p><?= auto_typography(nl2br_except_pre($item['content'])); ?></p>
				</div>
			</div>
		</div>
		<? endforeach ?>
	</div>
</div>

<br><br>
