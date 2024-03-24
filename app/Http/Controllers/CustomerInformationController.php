<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerInformationRequest;
use App\Http\Requests\UpdateCustomerInformationRequest;
use App\Models\CustomerInformation;

class CustomerInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerInformationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerInformation $customerInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerInformation $customerInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerInformationRequest $request, CustomerInformation $customerInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerInformation $customerInformation)
    {
        //
    }
}
