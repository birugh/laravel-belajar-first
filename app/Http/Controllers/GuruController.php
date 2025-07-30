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

    public function store(Request $request) {
        $validated = $request->validate([
            'nama_guru' => 'required|string|max:50'
        ]);
        guru::create($validated);
        // guru::create([
        //     'nama_guru' => $validated['nama_guru']
        // ]);
        return redirect()->back();
    }

    public function destroy($id) {
        guru::destroy($id);
        return redirect()->back();
    }
}
