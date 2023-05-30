<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Test\Fabricator;

class UserSeeder extends Seeder
{
    private const HOW_MANY = 67;

    public function run()
    {
        $this->db->table('users')->truncate();

        $fabricator = new Fabricator(Users::class);
        $fabricator->create(self::HOW_MANY);
    }
}
