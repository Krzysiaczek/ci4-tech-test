<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1><?= $title ?></h1>

<?= $table->generate($data); ?>

<?= $this->endSection() ?>