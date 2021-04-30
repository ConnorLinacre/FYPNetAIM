<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use Illuminate\Http\Request;

class CampusController extends Controller
{

    public function index() {
        return view('content.campus.table', ['campus' => Campus::all(),]);
    }

    public function create() {
        return view('content.campus.create');
    }

    public function store(Request $request) {
        $campus = Campus::create([
            'name' => $request->input('name'),
            'address' => $request->input('address')
        ]);
        $campus->save();
    }

    public function view(Campus $campus) {
        return view('content.campus.view', ['campus', $campus]);
    }

    public function edit(Campus $campus) {
        return view('content.campus.update', ['campus', $campus]);
    }

    public function update(Request $request, Campus $campus) {
        $campus->update([
            'name' => $request->input('name'),
            'address' => $request->input('address')
        ]);
        $campus->save();
    }

    public function destroy(Campus $campus) {
        $campus->delete();
        return redirect()->route('all_campuss');
    }
}
