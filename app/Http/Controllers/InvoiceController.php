<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', ['invoices' => $invoices]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|unique:invoices',
            'customer_id' => 'required|exists:customers,id',
            'date' => 'required|date',
            'pay_mode_id' => 'required|exists:pay_modes,id'
        ]);

        $invoice = Invoice::create($validated);
        return redirect()->route('invoices.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        return view('invoices.show', ['invoice' => $invoice]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        return view('invoices.edit', ['invoice' => $invoice]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        $validated = $request->validate([
            'number' => 'required',
            'customer_id' => 'required|exists:customers,id',
            'date' => 'required|date',
            'pay_mode_id' => 'required|exists:pay_modes,id'
        ]);

        $invoice->update($validated);
        return redirect()->route('invoices.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('invoices.index');
    }
}
