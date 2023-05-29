<?= $this->extend('layouts/main') ?>


<?= $this->section('content') ?>

<h3 class="mb-4">
    <?= $title ?>
</h3>

<?= $table->generate($data); ?>

<?= $this->endSection() ?>