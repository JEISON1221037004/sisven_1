<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PayMode;
use Illuminate\Http\Request;

class PayModeController extends Controller
{
    public function index()
    {
        return PayMode::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'observation' => 'nullable|max:200'
        ]);

        return PayMode::create($request->all());
    }

    public function show(PayMode $payMode)
    {
        return $payMode;
    }

    public function update(Request $request, PayMode $payMode)
    {
        $request->validate([
            'name' => 'required|max:50',
            'observation' => 'nullable|max:200'
        ]);

        $payMode->update($request->all());

        return $payMode;
    }

    public function destroy(PayMode $payMode)
    {
        $payMode->delete();

        return response()->noContent();
    }
}
