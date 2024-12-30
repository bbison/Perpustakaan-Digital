<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::all();
        return view('assignments.index', compact('assignments'));
    }

    public function create()
    {
        return view('assignments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required|date',
        ]);

        Assignment::create($request->all());

        return redirect()->route('assignments.index')->with('success', 'Tugas berhasil ditambahkan.');
    }

    public function show($id)
    {
        $assignment = Assignment::findOrFail($id);
        return view('assignments.show', compact('assignment'));
    }
}
