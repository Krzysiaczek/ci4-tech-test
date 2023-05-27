<?php

namespace App\Models;

use Faker\Generator;
use CodeIgniter\Model;

class User extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'firstname',
        'lastname',
        'username',
        'email',
        'mobile',
        'password'
    ];

    public function fake(Generator &$faker)
    {
        return [
            'firstname' => $faker->firstName(),
            'lastname'  => $faker->lastName(),
            'username'  => $faker->userName(),
            'email'     => $faker->email(),
            'mobile'    => $faker->phoneNumber(),
            'password'  => password_hash($faker->word(), PASSWORD_DEFAULT)
        ];
    }
}
