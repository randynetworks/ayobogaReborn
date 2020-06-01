<div class="main-page container sm-5 mt-3 mb-3">
	<div class="text-center mb-5">
		<h1 class="judul">Halo, Selamat Datang di Ayoboga.com</h1>
	</div>
	<h6 class="ban text-white p-3 text-center">Informasi dan artikel Terbaru untuk kamu!</h6>

	<div class="card-deck row m-0 justify-content-center">
		<?php foreach ($card_news as $news_item) : ?>
			<div class="container content bg-white text-center p-3 mt-3">
				<div class="card-body">
					<h2 class="card-title text-primary"><?= $news_item['title']; ?></h2>
					<p class="card-text text-dark"><?= $news_item['text']; ?></p>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>
