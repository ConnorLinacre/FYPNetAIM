<?php

namespace App\Http\Controllers;

use App\Models\Port;
use Illuminate\Http\Request;

class PortController extends Controller
{
    public function index() {
        return view('content.port.table', ['port' => Port::all(),]);
    }

    public function create() {
        return view('content.port.create');
    }

    public function store(Request $request) {
        $port = Port::create([
            'port_number' => $request->input("port_number"),
            'ethernet' => $request->input("ethernet"),
            'installed_by' => $request->input("installed_by"),
            'installed_on' => $request->input("installed_on"),
        ]);
        $port->save();
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
            'ethernet' => $request->input("ethernet"),
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
