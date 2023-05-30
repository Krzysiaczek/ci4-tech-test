<nav class="navbar navbar-expand navbar-dark bg-dark flex-column flex-md-row bd-navbar pl-0 pr-0">
    <!-- <nav class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar"> -->
    <div class="ml-5">
        <a class="navbar-brand" href="/">CodeIgniter4 Crud Tech Test</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= url_is('users*') ? 'active' : '' ?>">
                    <a class="nav-link pl-0" href="/users">
                        Users
                        <?= url_is('') ? '<span class="sr-only">(current)</span>' : '' ?>
                    </a>
                </li>

                <li class="nav-item <?= url_is('sandbox*') ? 'active' : '' ?>">
                    <a class="nav-link" href="/sandbox">
                        Sandbox
                        <?= url_is('admin*') ? '<span class="sr-only">(current)</span>' : '' ?>
                    </a>
                </li>

                <li class="nav-item <?= url_is('admin*') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= route_to('admin.home') ?>">
                        SuperAdmin
                        <?= url_is('admin*') ? '<span class="sr-only">(current)</span>' : '' ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>