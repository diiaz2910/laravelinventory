<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hike;
use Illuminate\Support\Facades\Hash;


class Hikes extends Controller
{
    public function index()
    {
    $hikes = Hike::all();
    return view('content.pages.hikes', compact('hikes'));
    }

    public function create()
    {
        return view('content.pages.hikes-create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
        ]);
        $hike = new Hike();
        $hike->name = $request->name;
        $hike->description = $request->description;
        $hike->risk = $request->risk;
        $hike->save();
        return redirect()->route('pages-hikes');
    }

    public function show($hike_id)
    {
        $hike = Hike::find($hike_id);
        return view('content.pages.hikes-show', compact('hike'));
    }

    public function update(Request $request)
    {
        $hike = Hike::find($request->type_id);
        $hike->name = $request->name;
        $hike->description = $request->description;

        $hike->save();
        return redirect()->route('pages-hikes');
    }

    public function destroy($hike_id)
    {
        $hike = Hike::find($hike_id);
        $hike->delete();
        return redirect()->route('pages-hikes');
    }

    public function switch($type_id)
    {
        $type = Type::find($type_id);
        $type->active = !$type->active;
        $type->save();
        return redirect()->route('pages-types');
    }
}