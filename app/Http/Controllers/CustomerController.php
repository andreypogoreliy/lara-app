<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(CustomerRequest $var){
//        return \response(Customer::select(['id', 'name'])->where('name', 'Ansel Gutkowski')->limit(1)->orderBy('name')->get());
//        return \response(Customer::firstOrCreate(['name' => 'Andrei']));
//        return \response(Customer::destroy(12));
        return \response(Customer::where('name', 'Ansel Gutkowski')->update(['updated_at' => null]));
    }
}
