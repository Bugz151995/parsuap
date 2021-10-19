<?php

namespace App\Validation;

use App\Models\AlumniModel;

class LoginRules {
  public function verify_user(string $str, string $fields, array $data) : bool {
    $account_model = new AlumniModel();

    $user = $account_model->where('email', $data['email'])
                          ->first();

    return (!$user) ? FALSE : password_verify($data['pass'], $user['password']);
  }

  public function signin_attempt(string $str) {
    $throttler = \Config\Services::throttler();
    $allow = $throttler->check('sign_in', 3, MINUTE);

    return $allow;
  }
}