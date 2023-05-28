<div class="card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2" style="width: 18rem;">
    <img src="https://i.pravatar.cc?img=<?= $post['id'] ?>" class="card-img-top mt-3" alt="thumbnail">
    <div class="card-body pl-0 pr-0 d-flex flex-column">
        <h5 class="card-title"><?= $post['title'] ?></h5>
        <p class="card-text"><?= $post['body'] ?></p>
        <a href="#" class="mt-auto btn btn-block btn-primary">Go somewhere</a>
    </div>
</div>