<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        return Detail::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'invoice_id' => 'required|exists:invoices,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        return Detail::create($request->all());
    }

    public function show(Detail $detail)
    {
        return $detail;
    }

    public function update(Request $request, Detail $detail)
    {
        $request->validate([
            'invoice_id' => 'required|exists:invoices,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        $detail->update($request->all());

        return $detail;
    }

    public function destroy(Detail $detail)
    {
        $detail->delete();

        return response()->noContent();
    }
}
