<?php

namespace App\Controllers\Admin;

use Faker\Factory;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $faker = Factory::create();
        $posts = [];
        for ($i = 0; $i < 3; $i++) {
            $posts[$i] = [
                'id'    => $i,
                'title' => $faker->sentence(2, true),
                'body'  => $faker->paragraph(3, true)
            ];
        }

        return view('admin/dashboard', [
            'title' => 'Admin Dashboard',
            'posts' => $posts
        ]);
    }
}
