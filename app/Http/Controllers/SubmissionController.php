<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\Assignment;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'student_name' => 'required',
            'task_file' => 'required|file|mimes:pdf,doc,docx',
        ]);

        $fileName = time() . '.' . $request->task_file->extension();
        $request->task_file->move(public_path('tasks'), $fileName);

        Submission::create([
            'assignment_id' => $id,
            'student_name' => $request->student_name,
            'file_name' => $fileName,
        ]);

        return back()->with('success', 'Tugas berhasil diunggah.');
    }
}

