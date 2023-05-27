<?= $this->extend('layouts/main') ?>



<?= $this->section('content') ?>

<h1><?= $title ?></h1>
<div class="row">
    <?php foreach ($posts as $post) : ?>
        <?= view_cell('PostCell', ['post' => $post]) ?>
    <?php endforeach ?>
</div>

<?= $this->endSection() ?>