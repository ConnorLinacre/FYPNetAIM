<?php

namespace App\Http\Controllers;

use App\Models\NetworkSwitch;
use Illuminate\Http\Request;

class NetworkSwitchController extends Controller
{
    public function index() {
        return view('content.networkswitch.table', ['networkswitch' => NetworkSwitch::all(),]);
    }

    public function create() {
        return view('content.networkswitch.create');
    }

    public function store(Request $request) {
        $networkswitch = NetworkSwitch::create([
            'name' => $request->input('name'),
            'floor' => $request->input('floor'),
            'serial' => $request->input('serial'),
        ]);
        $networkswitch->save();
    }

    public function view(NetworkSwitch $networkswitch) {
        return view('content.networkswitch.view', ['networkswitch', $networkswitch]);
    }

    public function edit(NetworkSwitch $networkswitch) {
        return view('content.networkswitch.update', ['networkswitch', $networkswitch]);
    }

    public function update(Request $request, NetworkSwitch $networkswitch) {
        $networkswitch->update([
            'name' => $request->input('name'),
            'floor' => $request->input('floor'),
            'serial' => $request->input('serial'),
        ]);
        $networkswitch->save();
    }

    public function destroy(NetworkSwitch $networkswitch) {
        $networkswitch->delete();
        return redirect()->route('all_networkswitches');
    }
}
