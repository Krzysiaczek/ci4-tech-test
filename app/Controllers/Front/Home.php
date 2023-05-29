<?php

namespace App\Controllers\Front;

use CodeIgniter\View\Table;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('front/home', ['title' => 'Ci4 Tech Test']);
    }

    public function users()
    {
        $table = new Table();
        $table->setHeading(model('users')->getNames());
        $table->setTemplate([
            'table_open' => '<table id="myTable" '
                . 'class="table table-hover w-100 table-striped table-bordered">',
        ]);

        $data = [
            'title' => 'Users',
            'table' => $table,
            'data' => model('users')->coverPasswords(model('Users')->getUsers()),
        ];

        return view('front/users', $data);
    }

    public function sandbox()
    {
        return view('front/sandbox', [
            'title' => 'Sandbox',
            'posts' => model('sandbox')->getPosts()
        ]);
    }
}
