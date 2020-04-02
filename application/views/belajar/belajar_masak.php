<div class="container sm-5 mt-3 mb-3">
    <div class="text-center">
		<h1 class="display-3">Sudah siap belajar masak?</h1>
	</div>
	<h6 class="bg-primary text-white pt-3 pb-3 text-center">Tenang aja, semua belajar dari awal kok, engga ada yang namanya telat!</h6>
    <div class="card-deck row mt-5">
        <?foreach ($cards_masak as $cardMasak) : ?>
            <div class="col-md-4 mb-3 text-center">
                <div class="card text-dark">
                    <div class="card-body text-align">
                        <h4 class="card-title"><a href="" class="hover-link"><?= $cardMasak['title']; ?></a></h4>
                        <p class="card-text"><?= $cardMasak['sub_title']; ?></p>
                    </div>
                </div>
            </div>
        <?endforeach?>
    </div>
</div>