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

    public function create()
    {
        return view('admin.buses.create');
    }

    public function destroy(Bus $bus)
    {
        $bus->delete();
        return redirect()->back()->with('success', 'Ônibus excluído com sucesso.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string',
        ]);

        Bus::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('buses.index')->with('success', 'Ônibus adicionado com sucesso.');
    }
}