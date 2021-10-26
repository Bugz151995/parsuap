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
    
    // login rules
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

    // registration rules
      public $signup_name = [
        'fname' => [
          'rules'  => 'required',
          'errors' => [
            'required'    => 'This field is required'
          ]
        ],
        'lname' => [
          'rules'  => 'required',
          'errors' => [
            'required'    => 'This field is required'
          ]
        ]
      ];

      public $signup_bt = [
        'batch_type' => [
          'rules'  => 'required',
          'errors' => [
            'required' => 'This field is required'
          ]
        ]
      ];

      public $signup_year_c = [
        'c_year' => [
          'label'  => 'College',
          'rules'  => 'required',
          'errors' => [
            'required'   => 'This field is required',
          ]
        ]
      ];

      public $signup_year_h = [
        'h_year' => [
          'label'  => 'High School',
          'rules'  => 'required',
          'errors' => [
            'required'  => 'This field is required'
          ]
        ]
      ];

      public $signup_year_b = [
        'c_year' => [
          'label'  => 'College',
          'rules'  => 'required',
          'errors' => [
            'required'    => 'This field is required'
          ]
        ],
        'h_year' => [
          'label'  => 'High School',
          'rules'  => 'required',
          'errors' => [
            'required'    => 'This field is required'
          ]
        ]
      ];

      public $signup_bday = [
        'bday' => [
          'rules'  => 'required',
          'errors' => [
            'required'  => 'This field is required'
          ]
        ]
      ];

      public $signup_sex = [
        'sex' => [
          'rules'  => 'required',
          'errors' => [
            'required'  => 'This field is required'
          ]
        ]
      ];

      public $signup_email = [
        'email' => [
          'rules'  => 'required|is_unique[alumni.email]',
          'errors' => [
            'required'  => 'This field is required',
            'is_unique' => 'This email is being used by another account.'
          ]
        ]
      ];

      public $signup_pass = [
        'pass' => [
          'label'  => 'Password',
          'rules'  => 'required',
          'errors' => [
            'required'  => 'This field is required',
          ]
        ],
        'pass_conf' => [
          'label'  => 'Password Confirmation',
          'rules'  => 'required|matches[pass]',
          'errors' => [
            'required'  => 'This field is required',
          ]
        ],
      ];
    // create forum topic rules
      public $forum_topic = [
          'post' => [
            'label' => 'Post',
            'rules' => 'required'
          ],
      ];

    // create forum posts rules
      public $forum_post = [
          'topic' => [
            'label' => 'Topic',
            'rules' => 'required'
          ],
          'post' => [
            'label' => 'Post',
            'rules' => 'required'
          ],
      ];
}
