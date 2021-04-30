<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index() {
        return view('content.building.table', ['building' => Building::all(),]);
    }

    public function create() {
        return view('content.building.create');
    }

    public function store(Request $request) {
        $building = Building::create([
            'name' => $request->input('name'),
            'address' => $request->input('address')
        ]);
        $building->save();
    }

    public function view(Building $building) {
        return view('content.building.view', ['building', $building]);
    }

    public function edit(Building $building) {
        return view('content.building.update', ['building', $building]);
    }

    public function update(Request $request, Building $building) {
        $building->update([
            'name' => $request->input('name'),
            'address' => $request->input('address')
        ]);
        $building->save();
    }

    public function destroy(Building $building) {
        $building->delete();
        return redirect()->route('all_buildings');
    }
}
