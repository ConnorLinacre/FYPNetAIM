<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Campus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuildingController extends Controller
{
    public function index(Campus $campus = null) {
        if ($campus == null) {
            return view('content.building.table', ['buildings' => Auth::user()->buildings]);
        } else {
            if ($campus->user != Auth::user()) { return abort(403); }
            return view('content.building.table', ['buildings' => $campus->buildings]);
        }
    }

    public function create(Campus $campus) {
        return view('content.building.create', ['campus' => $campus, ]);
    }

    public function store(Request $request, Campus $campus) {
        /*
         * Coding for saving multiple one->many on single model proved challenging
         * Saving the item with the user id manually set would not work
         * which meant that the item had to be created through the buildings
         * and then saved via the user.
         *
         * This took some time to figure out, as no online resources were available to help
         * and trial and error had to be employed to find a solution.
         *
         * This was the same for all of the store methods, barring campus (since it has a single relationship)
         */
        $building = $campus->buildings()->make([ // Make creates a model entry without saving
            'name' => $request->input('name'),
            'address' => $request->input('address')
        ]);
        Auth::user()->buildings()->save($building); // Save the new building via the user
        return redirect()->route('all_buildings', $campus);
    }

    public function view(Building $building) {
        if ($building->user != Auth::user()) { return abort(403); }
        return view('content.building.view', ['building' => $building, ]);
    }

    public function edit(Building $building) {
        if ($building->user != Auth::user()) { return abort(403); }
        return view('content.building.update', ['building' => $building, ]);
    }

    public function update(Request $request, Building $building) {
        if ($building->user != Auth::user()) { return abort(403); } // If not owner, return 403
        $building->update([
            'name' => $request->input('name'),
            'address' => $request->input('address')
        ]);
        $building->save();
        return redirect()->route('all_buildings', $building->campus);
    }

    public function destroy(Building $building) {
        if ($building->user != Auth::user()) { return abort(403); }
        foreach ($building->switches as $switch) {
            foreach ($switch->ports as $port) {
                $port->delete();
            }
            $switch->delete();
        }
        $building->delete();
        return redirect()->route('all_buildings');
    }
}
