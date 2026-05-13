<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index() {
        $people = People::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
        return view('people.index', ['people' => $people]);
    }
    public function show($id) {
        $person = People::with('dojo')->findOrFail($id);
        return view('people.show', ['person' => $person]);
    }
    public function create() {
        $dojo = Dojo::all();
        return view('people.create', ['dojos' => $dojo]);
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:1|max:100',
            'bio' => 'required|string',
            'dojo_id' => 'required|exists:dojos,id'
        ]);

        People::create($validatedData);
        return redirect('/people')->with('success', 'Person created successfully!');
    }
    public function delete($id) {
        $person = People::findOrFail($id);
        $person->delete();
        return redirect('/people')->with('success', 'Person deleted successfully!');
    }

}
