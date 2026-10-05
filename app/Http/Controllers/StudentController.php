<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showForm(): View
    {
        return view('student-form');
    }

    public function submitForm(Request $request): string
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'age' => ['required', 'integer', 'min:1', 'max:150'],
        ]);

        // Save student information to database
        Student::create($validated);

        return 'Student information saved successfully!';
    }
}
