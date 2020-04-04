<div class="container sm-5 mt-3 mb-3">
    <div class="text-center">
		<h1 class="display-3">Sudah siap belajar Service ?</h1>
        <br>
	</div>
	<h6 class="bg-primary text-white pt-3 pb-3 text-center">Tenang aja, semua belajar dari awal kok, engga ada yang namanya telat!</h6>
    <div class="card-deck row mt-5">
        <?foreach ($cards_service as $cardService) : ?>
            <div class="col-md-4 mb-3 text-center">
                <div class="card text-dark">
                    <div class="card-body text-align">
                        <h4 class="card-title"><a href="<?= base_url('belajar/view_service/'. $cardService['slug']);?>" class="hover-link"><?= $cardService['title']; ?></a></h4>
                        <p class="card-text"><?= $cardService['sub_title']; ?></p>
                    </div>
                </div>
            </div>
        <?endforeach?>
    </div>
</div>