<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Cassandra\Custom;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', [
            'customers' => $customers
        ]);
    }

    public function form()
    {
        $customer = new Customer();
        return view('customers.form', [
            'customer' => $customer
        ]);
    }

    public function store(CustomerRequest $request)
    {
        $customer = new Customer();
        $customer->fill($request->all());
        $customer->save();

        return redirect()->route('customers.edit', ['id' => $customer->id])
            ->with('success', 'Customer updated successfully.');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.form', [
            'customer' => $customer
        ]);
    }

    public function update(CustomerRequest $request, $id)
    {
        $customer = Customer::find($id);
        $customer->fill($request->all());
        $customer->id = $id;
        $customer->save();

        return redirect()->route('customers.edit', ['id' => $customer->id])
            ->with('success', 'Customer updated successfully.');
    }
}
