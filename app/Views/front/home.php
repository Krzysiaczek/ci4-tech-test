<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="alert alert-primary mb-5">
        <div class="d-flex flex-start w-100">
            <div class="mr-2 hidden-md-down">
                <span class="icon-stack icon-stack-lg">
                    <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                    <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                    <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                </span>
            </div>
            <div class="d-flex flex-fill">
                <div class="flex-fill">
                    <span class="h5">Info</span>
                    <p class="mb-0">
                        This site is just a demo, containing only dummy and fake data. As a technical test, it was built to satisfy the specification visible below.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('templates/welcome') ?>
</div>

<?= $this->endSection() ?>