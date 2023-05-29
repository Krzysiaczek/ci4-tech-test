<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1><?= $title ?></h1>

<p class="mt-3 mb-2">
    Mobile first layout with dynamic amount of columns
    <i class="far fa-question-circle" data-toggle="popover"
        data-content="Resize the browser window to see different versions" data-placement="top">
    </i>
</p>

<div class="row">
    <?php foreach ($posts as $post) : ?>
        <?= view_cell('PostCell', ['post' => $post]) ?>
    <?php endforeach ?>
</div>

<?= $this->endSection() ?>