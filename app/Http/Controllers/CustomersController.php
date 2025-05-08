<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('customers.index',[
            'customers' => $customers
        ]);
    }

    public function form(){
        return view('customers.form');
    }

    public function store(Request $request){
        $customer = new Customer();
        $customer->fill($request->all());
        $customer->save();
        return view('customers.form');
    }
}
