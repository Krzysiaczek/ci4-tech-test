<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>


<div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-table'></i> Tables: <span class='fw-300'>Users</span>
        <small>by Krzysztof Dabrowski</small>
    </h1>
</div>
<div class="alert alert-primary">
    <div class="d-flex flex-start w-100">
        <div class="mr-2 hidden-md-down">
            <span class="icon-stack icon-stack-lg">
                <i class="base base-2 icon-stack-3x opacity-100 color-primary-500"></i>
                <i class="base base-2 icon-stack-2x opacity-100 color-primary-300"></i>
                <i class="fal fa-info icon-stack-1x opacity-100 color-white"></i>
            </span>
        </div>
        <div class="d-flex flex-fill">
            <div class="flex-fill">
                <span class="h5">About</span>
                <p>
                    DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table.
                    The stated goal of DataTables is "To enhance the accessibility of data in HTML tables". In order to achieve this we recognise that DataTables has two categories of users that interact with the interfaces the software has:
                </p>
                <ul>
                    <li>
                        End users - those who use the interface in the browser that you create with DataTables
                    </li>
                    <li>
                        Developers - yourself and the other developers working with DataTables to create your apps, sites, services, etc.
                    </li>
                </ul>
                <p class="m-0">
                    Find in-depth, guidelines, tutorials and more on Datatables's <a href="https://www.datatables.net/manual/" target="_blank">Official Documentation</a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Table <span class="fw-300"><i>Users</i></span>
                </h2>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="panel-tag">
                        For some reason DataTable settings, allowing to hide and make the column hidden and not searchable (password), are ignored inside SmartAdmin environment. The same config settings work perfectly <a href="<?= route_to('front.users')?>" target="_blank">outside</a> SmartAdmin.
                    </div>
                    <!-- datatable start -->
                    <!-- <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100"> -->
                    <?= $table->generate($data); ?>
                    <!-- datatable end -->
                </div>
            </div>
        </div>
    </div>
</div>





<?= $this->endSection() ?>