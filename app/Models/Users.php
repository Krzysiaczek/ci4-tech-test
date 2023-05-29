<?php

namespace App\Models;

use Faker\Generator;
use CodeIgniter\Model;

class Users extends Model
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

    public function getUsers($id = null)
    {
        if (empty($id)) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getNames()
    {
        $results = [];
        foreach ($this->db->getFieldNames($this->table) as $name) {
            $results[] = ucwords(str_replace('_', ' ', $name));
        }

        return $results;
    }

    public function coverPasswords(array $data): array
    {
        $results = [];
        foreach ($data as $row) {
            if (isset($row['password'])) {
                $row['password'] = '**********';
                $results[] = $row;
            }
        }

        return $results;
    }
}
