<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between mb-3">
    <h1><?= $title ?></h1>

    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#userModal">
            Add New User
        </button>
    </div>
</div>

<?= $table->generate($data) ?>

<?= $this->include('templates/front/modals/user') ?>

<?= $this->endSection() ?>