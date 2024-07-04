
<div class="row">
   <div class="list-group ">

       <?php foreach ($articles as $key => $article): ?>
           <a href="<?= $this->Url->build(['controller' => 'Blogs', 'action' => 'view', $article->id]) ?>" class="list-group-item list-group-item-action flex-column mb-2">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?= $article->title;?></h5>
                    <small>3 days ago</small>
                </div>
                <p class="mb-1">
                    <?php
                    echo $this->Text->truncate(
                        $article->details,
                        222,
                        [
                            'ellipsis' => '...',
                            'exact' => false
                        ]
                    );
                    ?>
                </p>
                <small>Donec id elit non mi porta.</small>
           </a>
       <?php endforeach; ?>

    </div>
    <div>
        <ul class="pagination">
            <?= $this->Paginator->prev("<<"); ?>
            <?= $this->Paginator->numbers(); ?>
            <?= $this->Paginator->next(">>") ?>
        </ul>

    </div>
</div>

