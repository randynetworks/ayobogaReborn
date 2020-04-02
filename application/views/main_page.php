<div class="container pl-0 pr-0 mt-5 mb-5">
	<div class="text-center mb-5">
		<h1 class="display-3">Halo, Selamat Datang di Ayoboga.com</h1>
	</div>
	<h6 class="bg-primary text-white pt-3 pb-3 text-center">Informasi dan artikel Terbaru untuk kamu!</h6>

	<? foreach ($card_news as $news_item) : ?>
	<div class="card text-center bg-light border-light pt-3 pb-3"style="width: 25rem; display:inline;">
		<div class="card-body">
			<h3 class="card-title"><?= $news_item['title'];?></h3>
			<h6 class="card-subtitle mb-2 text-muted"><?= $news_item['date'];?></h6>
			<p class="card-text"><?= $news_item['text'];?></p>
		</div>
		<hr>
	</div>
	<? endforeach ?>
</div>





