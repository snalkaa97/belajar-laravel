<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::all();

        $data = [
            'students' => $students,
            'title' => 'Students',
        ];
        return view('student.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //OTOMATIS
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'nim' => 'required|max:12',
        //     'email' => 'required',
        // ]);

        //MANUAL
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:255',
        //     'nim' => 'required|max:12',
        //     'email' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     return redirect('/students/create')
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        //OTOMATIS REDIRECTION
        // Validator::make($request->all(), [
        //     'name' => 'required|max:255',
        //     'nim' => 'required|max:12',
        //     'email' => 'required',
        // ])->validate();


        //Custom Error Message
        // $messages = [
        //     'required' => 'The :attribute field is required.',
        // ];
        $messages = [
            'email.required' => 'We need to know your e-mail address!',
            'name.required' => 'We need to know your name!',
            'nim.required' => 'We need to know your NIM!',
        ];
        Validator::make($request->all(), [
            'name' => 'required|max:255',
            'nim' => 'required|max:12',
            'email' => 'required',
        ], $messages)->validate();

        //
        // $student = new Student;
        // $student->name = $request->name;
        // $student->nim = $request->nim;
        // $student->email = $request->email;

        // $student->save();
        // Student::create([
        //     'name' => $request->name,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        // ]); //harus tambahkan fillable di model

        Student::create($request->all()); //harus tambahkan fillable di model

        return redirect('/students')->with('status', 'Succesful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        $data = [
            'student' => $student,
            'title' => 'Student',
        ];
        return view('student.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
