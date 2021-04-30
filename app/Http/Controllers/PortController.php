<?php

namespace App\Http\Controllers;

use App\Models\NetworkSwitch;
use App\Models\Port;
use Illuminate\Http\Request;

class PortController extends Controller
{
    public function index(NetworkSwitch $switch = null) {
        if ($switch == null) {
            return view('content.port.table', ['ports' => Port::all(),]);
        } else {
            return view('content.port.table', ['ports' => $switch->ports,]);
        }
    }

    public function create(NetworkSwitch $switch) {
        return view('content.port.create', ['switch' => $switch,]);
    }

    public function store(Request $request, NetworkSwitch $switch) {
        $switch->ports()->create([
            'port_number' => $request->input("port_number"),
            'access_point' => $request->input("access_point"),
            'installed_by' => $request->input("installed_by"),
            'installed_on' => $request->input("installed_on"),
        ]);
    }

    public function view(Port $port) {
        return view('content.port.view', ['port', $port]);
    }

    public function edit(Port $port) {
        return view('content.port.update', ['port', $port]);
    }

    public function update(Request $request, Port $port) {
        $port->update([
            'port_number' => $request->input("port_number"),
            'access_point' => $request->input("access_point"),
            'installed_by' => $request->input("installed_by"),
            'installed_on' => $request->input("installed_on"),
        ]);
        $port->save();
    }

    public function destroy(Port $port) {
        $port->delete();
        return redirect()->route('all_ports');
    }
}
