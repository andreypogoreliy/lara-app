<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorizationRequest;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer as Customer;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

class RegistrationController extends Controller
{
    public function index(AuthorizationRequest $var){
//$var->request->get('email')
        $params = $var->all();
        $registered = !isNull(Customer::
            select(['id', 'name'])->
            where('email', $params['email'])->
            where('password', md5($params['password']))->
            first()
        );

        if(!$registered){
            Customer::create(
                $params['name'],
                $params['surname'],
                $params['email'],
                $params['password']
            );
        }
        return redirect()->route('route.login');
    }
}
