<?php

namespace App\Http\Controllers;

use App\Models\NetworkSwitch;
use App\Models\Port;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortController extends Controller
{
    public function index(NetworkSwitch $switch = null) {
        if ($switch == null) {
            return view('content.port.table', ['ports' => Auth::user()->ports, 'switch' => $switch]);
        } else {
            if ($switch->user != Auth::user()) { return abort(403); }
            return view('content.port.table', ['ports' => $switch->ports, 'switch' => $switch]);
        }
    }

    public function create(NetworkSwitch $switch) {
        return view('content.port.create', ['switch' => $switch,]);
    }

    public function store(Request $request, NetworkSwitch $switch) {
        $port =  $switch->ports()->make([
            'port_number' => $request->input("port_number"),
            'access_point' => $request->input("access_point"),
            'installed_by' => $request->input("installed_by"),
            'installed_on' => $request->input("installed_on"),
        ]);
        Auth::user()->ports()->save($port);
        return redirect()->route('all_ports', $switch);
    }

    public function view(Port $port) {
        if ($port->user != Auth::user()) { return abort(403); }
        return view('content.port.view', ['port' => $port]);
    }

    public function edit(Port $port) {
        if ($port->user != Auth::user()) { return abort(403); }
        return view('content.port.update', ['port' => $port]);
    }

    public function update(Request $request, Port $port) {
        if ($port->user != Auth::user()) { return abort(403); }
        $port->update([
            'port_number' => $request->input("port_number"),
            'access_point' => $request->input("access_point"),
            'installed_by' => $request->input("installed_by"),
            'installed_on' => $request->input("installed_on"),
        ]);
        $port->save();
        return redirect()->route('all_ports', $port->switch);
    }

    public function destroy(Port $port) {
        if ($port->user != Auth::user()) { return abort(403); }
        $port->delete();
        return redirect()->route('all_ports');
    }
}
