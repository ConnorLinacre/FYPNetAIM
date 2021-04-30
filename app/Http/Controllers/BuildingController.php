<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Campus;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index(Campus $campus = null) {
        if ($campus == null) {
            return view('content.building.table', ['buildings' => Building::all(),]);
        } else {
            return view('content.building.table', ['buildings' => $campus->buildings,]);
        }
    }

    public function create(Campus $campus) {
        return view('content.building.create', ['campus' => $campus, ]);
    }

    public function store(Request $request, Campus $campus) {
        $campus->buildings()->create([
            'name' => $request->input('name'),
            'address' => $request->input('address')
        ]);
    }

    public function view(Building $building) {
        return view('content.building.view', ['building' => $building, ]);
    }

    public function edit(Building $building) {
        return view('content.building.update', ['building' => $building, ]);
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
