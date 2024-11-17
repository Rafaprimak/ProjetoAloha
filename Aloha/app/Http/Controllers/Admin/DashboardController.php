<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $buses = Bus::all();
        return view('admin.dashboard', ['buses' => $buses]);
    }

    public function updateStatus(Request $request, Bus $bus)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $bus->status = $request->input('status');
        $bus->save();

        return redirect()->back()->with('success', 'Status atualizado com sucesso.');
    }
}