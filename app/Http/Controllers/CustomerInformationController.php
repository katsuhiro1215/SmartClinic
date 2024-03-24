<?php

namespace App\Http\Controllers;

use App\Http\Requests\Store\StoreCustomerInformationRequest;
use App\Http\Requests\Update\UpdateCustomerInformationRequest;
use App\Models\CustomerInformation;
use Inertia\Inertia;

class CustomerInformationController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(StoreCustomerInformationRequest $request)
    {
        //
    }

    public function show(CustomerInformation $customerInformation)
    {
        //
    }

    public function edit(CustomerInformation $customerInformation)
    {
        //
    }

    public function update(UpdateCustomerInformationRequest $request, CustomerInformation $customerInformation)
    {
        //
    }

    public function destroy(CustomerInformation $customerInformation)
    {
        //
    }
}
