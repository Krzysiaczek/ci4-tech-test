<?php

namespace App\Controllers\Admin;

use CodeIgniter\View\Table;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('admin/home', ['title' => 'Admin Dashboard']);
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

        return view('admin/users', $data);
    }
}
