<?php

namespace App\Models;

use Faker\Factory;

class Sandbox
{
    public function getPosts(int $howMany = 12)
    {
        helper('text');
        $faker = Factory::create();

        $posts = [];
        for ($i = 1; $i <= $howMany; $i++) {
            $posts[$i] = [
                'id'    => $i,
                'title' => $faker->sentence(2, true),
                'body'  => word_limiter($faker->paragraph(3, true), 20)
            ];
        }

        return $posts;
    }
}
