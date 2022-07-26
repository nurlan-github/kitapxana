<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return StudentResource::collection(Student::get());
    }

    public function store(StudentRequest $request)
    {
        $validated = $request->validated();

        Student::create($validated);
        return response([
            'code' => 200,
            'message' => 'created'
        ]);
    }

    public function show($id){

        $students = Student::where('id', $id)->get();

        return response([
            'code' => 200,
            'data' => StudentResource::collection($students)
        ]);
    }

    public function update(StudentRequest $request, $id)
    {
        $validated = $request->validated();

        $student = Student::where('id', $id)->update($validated);
        return response([
            'code' => 200,
            'message' => 'updated'
        ]);
    }

    public function destroy($id)
    {
        Student::where('id', $id)->delete();
        return response([
            'code' => 200,
            'message' => 'deleted'
        ]);
    }
}
