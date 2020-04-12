<div class="container sm-5 mt-3 mb-3">
    <div class="text-center">
		<h1 class="display-3"><?= $cards_masak_item['title'];?></h1>
        <br>
	</div>
	<h6 class="bg-primary text-white pt-3 pb-3 text-center"><?= $cards_masak_item['sub_title'];?></h6>
</div>

<div class="card-deck row mt-5 justify-content-center">
    <?foreach ($items as $item) : ?>
        <div class="col-sm-7 mb-3">
            <div class="card text-dark">
                <div class="card-body text-align">
                    <h1 class="card-title text-center"><?= $item['title'];?></h1>
                    <p class="card-text text-center"><?= $item['sub_title']; ?></p>
                    <p class="card-text disable text-center"><?= $item['create_by']; ?></p>
                    <p class="card-text"><?= $item['content']; ?></p>
                    <p class="card-text disable text-center"><?= $item['create_date']; ?></p>

                </div>
            </div>
        </div>
    <?endforeach?>
</div>
