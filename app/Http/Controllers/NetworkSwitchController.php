<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\NetworkSwitch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NetworkSwitchController extends Controller
{
    public function index(Building $building = null) {
        if ($building == null) {
            return view('content.networkswitch.table', ['switches' => Auth::user()->switches, 'building' => $building]);
        } else {
            if ($building->user != Auth::user()) { return abort(403); }
            return view('content.networkswitch.table', ['switches' => $building->switches, 'building' => $building]);
        }
    }

    public function create(Building $building) {
        return view('content.networkswitch.create', ['building' => $building,]);
    }

    public function store(Request $request, Building $building) {
        $switch = $building->switches()->make([
            'name' => $request->input('name'),
            'floor' => $request->input('floor'),
            'model' => $request->input('model'),
        ]);
        Auth::user()->switches()->save($switch);
        return redirect()->route('all_switches', $building);
    }

    public function view(NetworkSwitch $switch) {
        if ($switch->user != Auth::user()) { return abort(403); }
        return view('content.networkswitch.view', ['switch' => $switch,]);
    }

    public function edit(NetworkSwitch $switch) {
        if ($switch->user != Auth::user()) { return abort(403); }
        return view('content.networkswitch.update', ['switch' => $switch,]);
    }

    public function update(Request $request, NetworkSwitch $switch) {
        if ($switch->user != Auth::user()) { return abort(403); }
        $switch->update([
            'name' => $request->input('name'),
            'floor' => $request->input('floor'),
            'model' => $request->input('model'),
        ]);
        $switch->save();
        return redirect()->route('all_switches', $switch->building);
    }

    public function destroy(NetworkSwitch $switch) {
        if ($switch->user != Auth::user()) { return abort(403); }
        foreach ($switch->ports as $port) {
            $port->delete();
        }
        $switch->delete();
        return redirect()->route('all_switches');
    }
}
