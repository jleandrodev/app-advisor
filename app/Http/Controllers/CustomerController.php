<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $customers = Customer::paginate(10);
        return view('layouts.customers.index', \compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create(Request $request)
    {
        return view('layouts.customers.new-customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(CustomerRequest $request)
    {
        $customer = Customer::create($request->all());

        return \redirect()->route('customers.show', $customer->id);
    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show(Customer $customer)
    {
        return view('layouts.customers.show', \compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit(Customer $customer)
    {
        return view('layouts.customers.edit', \compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());

        return \redirect()->route('customers.show', $customer);
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return \redirect()->route('customers.index');
    }
}
