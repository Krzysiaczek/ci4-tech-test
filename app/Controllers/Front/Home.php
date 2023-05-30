<?php

namespace App\Controllers\Front;

use CodeIgniter\View\Table;
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;

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

    public function create()
    {
        if (!$this->request->isAjax()) {
            return $this->failForbidden('Only AJAX requests allowed!.');
        }

        $post = $this->request->getPost();

        $data['status'] = 'success';
        $data['message'] = 'This is the success message';

        $validation = \Config\Services::validation();
        // $validation->setRules(/* */);

        if (!$validation->run($post, 'users')) {
            $data['status'] = 'error';
            $data['reasons'] = $validation->getErrors();
            $data['csrf'] = csrf_hash();
        }

        return json_encode($data);
    }

    public function sandbox()
    {
        return view('front/sandbox', [
            'title' => 'Sandbox',
            'posts' => model('sandbox')->getPosts(),
        ]);
    }
}
