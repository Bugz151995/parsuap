<?php

namespace App\Validation;

use App\Models\AlumniModel;

class LoginRules {
  public function verify_user(string $str, string $fields, array $data) : bool {
    $a_model = new AlumniModel();

    $user = $a_model->where('email', $data['email'])->first();

    return (!$user) ? FALSE : password_verify($data['pass'], $user['password']);
  }

  public function signin_attempt(string $str) {
    $throttler = \Config\Services::throttler();
    $allow = $throttler->check('login', 3, MINUTE);

    return $allow;
  }
}