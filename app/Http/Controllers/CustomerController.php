<?php

namespace App\Http\Controllers;

use App\Http\Requests\Store\StoreCustomerRequest;
use App\Http\Requests\Update\UpdateCustomerRequest;
use App\Models\Customer;
use Inertia\Inertia;

class CustomerController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(StoreCustomerRequest $request)
    {
        //
    }

    public function show(Customer $customer)
    {
        //
    }

    public function edit(Customer $customer)
    {
        //
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    public function destroy(Customer $customer)
    {
        //
    }
}
