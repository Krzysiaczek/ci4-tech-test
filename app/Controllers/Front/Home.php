<?php

namespace App\Controllers\Front;

use CodeIgniter\View\Table;
use App\Controllers\BaseController;
use App\Models\Users;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Database\Exceptions\DatabaseException;

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

        $data = $this->verifyData($post);

        if ($data['status'] == 'error') {
            return $this->response->setJSON($data);
        }

        try {
            $model = model(Users::class);
            $model->save([
                'firstname' => $post['firstname'],
                'lastname' => $post['lastname'],
                'username' => $post['username'],
                'mobile' => $post['mobile'],
                'email' => $post['email'],
                'password' => $post['password'],
                'id' => $post['id'],
            ]);
        } catch (DatabaseException $e) {
            log_message('error', 'Unable to save the User: ' . $e->getMessage());
            return $this->response->setJSON([
                'status' => 'error', 'reasons' => 'Internal Error: Data has not been saved!'
            ]);
        }

        return $this->response->setJSON($data);
    }

    public function sandbox()
    {
        return view('front/sandbox', [
            'title' => 'Sandbox',
            'posts' => model('sandbox')->getPosts(),
        ]);
    }

    protected function verifyData($post)
    {
        $data['status'] = 'success';

        $validation = \Config\Services::validation();

        if (!$validation->run($post, 'users')) {
            $data['status'] = 'error';
            $data['reasons'] = $validation->getErrors();
            $data['csrf'] = csrf_hash();
        }

        return $data;
    }
}
