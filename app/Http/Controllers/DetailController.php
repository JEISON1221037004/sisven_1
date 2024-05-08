<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        $details = Detail::all();
        return view('details.index', ['details' => $details]);
    }

    public function create()
    {
        return view('details.new');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'invoice_id' => 'required|exists:invoices,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        $detail = Detail::create($validated);
        return redirect()->route('details.index');
    }

    public function show(Detail $detail)
    {
        return view('details.show', ['detail' => $detail]);
    }

    public function edit(Detail $detail)
    {
        return view('details.edit', ['detail' => $detail]);
    }

    public function update(Request $request, Detail $detail)
    {
        $validated = $request->validate([
            'invoice_id' => 'required|exists:invoices,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        $detail->update($validated);
        return redirect()->route('details.index');
    }

    public function destroy(Detail $detail)
    {
        $detail->delete();
        return redirect()->route('details.index');
    }
}
