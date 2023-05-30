<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $users = [
        'id'    => [
            'label' => 'ID',
            'rules' => 'is_natural_no_zero|permit_empty',
        ],
        'firstname' => [
            'label'  => 'Firstname',
            'rules'  => 'required',
            'errors' => [
                'required' => '{field} is required!',
            ],
        ],
        'lastname' => [
            'label'  => 'Lastname',
            'rules'  => 'required',
            'errors' => [
                'required' => '{field} is required!',
            ],
        ],
        'username' => [
            'label'  => 'Username',
            'rules'  => 'required|is_unique[users.username,id,{id}]',
            'errors' => [
                'required' => 'All accounts must have {field} provided.',
            ],
        ],
        'password' => [
            'label'  => 'Password',
            'rules'  => 'required|min_length[8]|alpha_numeric_punct',
            'errors' => [
                'min_length' => 'Your {field} is too short. You want to get hacked?',
            ],
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email|is_unique[users.email,id,{id}]',
            'errors' => [
                'min_length' => 'Your {field} is required and can be register only once.',
            ],
        ],
        'mobile' => [
            'label'  => 'Mobile',
            'rules'  => 'required',
            'errors' => [
                'min_length' => '{field} is required!',
            ],
        ],
    ];
}
