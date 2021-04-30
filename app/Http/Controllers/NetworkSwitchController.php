<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\NetworkSwitch;
use Illuminate\Http\Request;

class NetworkSwitchController extends Controller
{
    public function index(Building $building = null) {
        if ($building == null) {
            return view('content.networkswitch.table', ['switches' => NetworkSwitch::all(),]);
        } else {
            return view('content.networkswitch.table', ['switches' => $building->switches,]);
        }
    }

    public function create(Building $building) {
        return view('content.networkswitch.create', ['building' => $building,]);
    }

    public function store(Request $request, Building $building) {
        $building->switches()->create([
            'name' => $request->input('name'),
            'floor' => $request->input('floor'),
            'serial' => $request->input('serial'),
        ]);
    }

    public function view(NetworkSwitch $switch) {
        return view('content.networkswitch.view', ['switch' => $switch,]);
    }

    public function edit(NetworkSwitch $switch) {
        return view('content.networkswitch.update', ['switch' => $switch,]);
    }

    public function update(Request $request, NetworkSwitch $switch) {
        $switch->update([
            'name' => $request->input('name'),
            'floor' => $request->input('floor'),
            'serial' => $request->input('serial'),
        ]);
        $switch->save();
    }

    public function destroy(NetworkSwitch $switch) {
        $switch->delete();
        return redirect()->route('all_switches');
    }
}
