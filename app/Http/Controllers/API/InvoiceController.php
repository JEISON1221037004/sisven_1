<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return Invoice::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|unique:invoices',
            'customer_id' => 'required|exists:customers,id',
            'date' => 'required|date',
            'pay_mode_id' => 'required|exists:pay_modes,id'
        ]);

        return Invoice::create($request->all());
    }

    public function show(Invoice $invoice)
    {
        return $invoice;
    }

    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'number' => 'required',
            'customer_id' => 'required|exists:customers,id',
            'date' => 'required|date',
            'pay_mode_id' => 'required|exists:pay_modes,id'
        ]);

        $invoice->update($request->all());

        return $invoice;
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return response()->noContent();
    }
}

