<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        $schools = ['IT', 'Health', 'Business', 'Hospitality'];
        return view('register', compact('schools'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string|max:15',
            'school' => 'required|string|in:IT,Health,Business,Hospitality',
        ]);

        Student::create($validated);

        return redirect('/register')->with('success', 'Student registered successfully!');
    }
}
#recommit
