<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-info-circle'></i>
        Codeigniter 4 <span class='fw-300'> PHP Technical Test</span>
        <small>by Krzysztof Dabrowski</small>
    </h1>

</div>
<div class="alert alert-primary">
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

<!-- Your main content goes below here: -->
<?= $this->include('templates/welcome') ?>

<?= $this->endSection() ?>