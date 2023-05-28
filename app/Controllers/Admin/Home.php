<?php

namespace App\Controllers\Admin;

use Faker\Factory;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        helper('text');

        $faker = Factory::create();

        $posts = [];

        for ($i = 0; $i < 12; $i++) {
            $posts[$i] = [
                'id'    => $i,
                'title' => $faker->sentence(2, true),
                'body'  => word_limiter($faker->paragraph(3, true), 20)
            ];
        }

        return view('admin/dashboard', [
            'title' => 'Admin Dashboard',
            'posts' => $posts
        ]);
    }
}
