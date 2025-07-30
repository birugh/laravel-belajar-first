<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index() {
        $gurus = guru::all();
        return view("index", ['datas' => $gurus]);
    }

    public function create() {
        return view("guru.create");
    }

    public function edit($id) {
        $guru = guru::find($id);
        return view("guru.edit", ['guru' => $guru]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama_guru' => 'required|string|max:50'
        ]);
        guru::create($validated);
        // guru::create([
        //     'nama_guru' => $validated['nama_guru']
        // ]);
        return redirect()->route('guru.index');
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'nama_guru' => 'required|string|max:50'
        ]);
        $guru = guru::findOrFail($id);
        $guru->update($validated);

        return redirect()->back();

    }

    public function destroy($id) {
        guru::destroy($id);
        return redirect()->back();
    }
}
