<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between mb-3">
    <h1><?= $title ?></h1>

    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
            Add New User
        </button>
    </div>
</div>

<?= $table->generate($data); ?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="form">

                    <?= csrf_field() ?>

                    <div class="row">
                        <div class="form-group col">
                            <label for="firstname">Firstname</label>
                            <input type="text" class="form-control" id="firstname" required>
                        </div>
                        <div class="form-group col">
                            <label for="lastname">Lastname</label>
                            <input type="text" class="form-control" id="lastname" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" required>
                        </div>
                        <div class="form-group col">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="mobile">Mobile</label>
                            <input type="mobile" class="form-control" id="mobile" required>
                        </div>
                    </div>
                    <div id="errors" class="alert alert-danger invisible" role="alert" ></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="add">Add</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>