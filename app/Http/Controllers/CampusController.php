<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampusController extends Controller
{

    public function index() {
        return view('content.campus.table', ['campuses' => Auth::user()->campuses,]);
    }

    public function create() {
        return view('content.campus.create');
    }

    public function store(Request $request) {
        $campus = Auth::user()->campuses()->create([
            'name' => $request->input('name'),
            'address' => $request->input('address')
        ]);
        return redirect()->route('all_campus');
    }

    public function view(Campus $campus) {
        if ($campus->user != Auth::user()) { return abort(403); }
        return view('content.campus.view', ['campus' => $campus]);
    }

    public function edit(Campus $campus) {
        if ($campus->user != Auth::user()) { return abort(403); }
        return view('content.campus.update', ['campus' => $campus]);
    }

    public function update(Request $request, Campus $campus) {
        if ($campus->user != Auth::user()) { return abort(403); }
        $campus->update([
            'name' => $request->input('name'),
            'address' => $request->input('address')
        ]);
        $campus->save();
        return redirect()->route('all_campus');
    }

    public function destroy(Campus $campus) {
        if ($campus->user != Auth::user()) { return abort(403); }
        /*
         * Multiple deletions to prevent orphaned data
         */
        foreach ($campus->buildings as $building) {
            foreach ($building->switches as $switch) {
                foreach ($switch->ports as $port) {
                    $port->delete();
                }
                $switch->delete();
            }
            $building->delete();
        }
        $campus->delete();
        return redirect()->route('all_campus');
    }
}
