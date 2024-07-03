<div>
   <h1><?= h($article->title) ?></h1>
    <div>
        <?= $this->Text->autoParagraph(h($article->details)); ?>
    </div>
</div>

