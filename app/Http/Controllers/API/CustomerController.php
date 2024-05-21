<?php


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return Customer::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'document_number' => 'required|unique:customers|max:15',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'email|max:100|nullable'
        ]);

        return Customer::create($request->all());
    }

    public function show(Customer $customer)
    {
        return $customer;
    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'document_number' => 'required|max:15',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'email|max:100|nullable'
        ]);

        $customer->update($request->all());

        return $customer;
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return response()->noContent();
    }
}

