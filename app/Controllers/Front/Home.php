<?php

namespace App\Controllers\Front;

use CodeIgniter\View\Table;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $table = new Table();
        $table->setHeading(model('users')->getNames());
        $table->setTemplate(['table_open' => '<table id="myTable" class="table table-striped table-bordered">']);

        $data = [
            'title' => 'Users',
            'table' => $table,
            'data'  => $this->coverPasswords(model('Users')->getUsers())
        ];

        return view('front/home', $data);
    }

    protected function coverPasswords(array $data): array
    {
        $results = [];
        foreach ($data as $row) {
            $row['password'] = '*** hidden ***';
            $results[] = $row;
        }

        return $results;
    }
}
