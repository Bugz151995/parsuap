<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;
use App\Validation\LoginRules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        LoginRules::class
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
		'error_list'=> 'validation_err\_errors_list',
		'error_single'=> 'validation_err\_errors_single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    public $login = [
		'email' => [
			'rules'  => 'required',
			'errors' => ['required' => '']
		],
		'pass' => [
			'rules'  => 'required|signin_attempt|verify_user[email, pass]',
			'errors' => [
				'required'    => 'Please enter your username or password.',
				'signin_attempt' => 'Max sign-in attempt, Please try again in a minute.',
				'verify_user' => 'The Email Address or Password is invalid.'
			]
		]
	];
}
