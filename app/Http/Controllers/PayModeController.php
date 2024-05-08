<?php

namespace App\Http\Controllers;

use App\Models\PayMode;
use Illuminate\Http\Request;

class PayModeController extends Controller
{
    public function index()
    {
        $payModes = PayMode::all();
        return view('pay_modes.index', ['payModes' => $payModes]);
    }

    public function create()
    {
        return view('pay_modes.new');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'observation' => 'nullable|max:200'
        ]);

        $payMode = PayMode::create($validated);
        return redirect()->route('pay_modes.index');
    }

    public function show(PayMode $payMode)
    {
        return view('pay_modes.show', ['payMode' => $payMode]);
    }

    public function edit(PayMode $payMode)
    {
        return view('pay_modes.edit', ['payMode' => $payMode]);
    }

    public function update(Request $request, PayMode $payMode)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'observation' => 'nullable|max:200'
        ]);

        $payMode->update($validated);
        return redirect()->route('pay_modes.index');
    }

    public function destroy(PayMode $payMode)
    {
        $payMode->delete();
        return redirect()->route('pay_modes.index');
    }
}

