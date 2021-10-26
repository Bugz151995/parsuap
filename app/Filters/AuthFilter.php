<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use App\Models\AlumniModel;
use App\Models\AccRequestModel;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('alumni_is_loggedin')) {
          return redirect()->to('/');
        } else {
            $a_model = new AlumniModel();
            $r_model = new AccRequestModel();

            $account = $r_model->select('status')
                               ->where(['alumni_id' => session()->get('alumni_id')])
                               ->first();
            if($account['status'] == 0) {
                session()->setTempData('info', true, 1);
                session()->setTempData('msg', 'Your account is being verified by our staff, Please wait for the email confirmation. Thank you!', 1);
                return redirect()->to('/');
            }
            $user_data = $a_model->find(session()->get('alumni_id'));
            session()->setFlashData($user_data);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}