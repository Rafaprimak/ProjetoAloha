<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status'];
}

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $buses = Bus::all();
        return view('dashboard', ['buses' => $buses]);
    }
}
