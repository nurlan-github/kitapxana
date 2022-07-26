<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacultyRequest;
use App\Http\Resources\FacultyResource;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index(){
        return FacultyResource::collection(Faculty::with('groups')->get());

    }

    public function store(FacultyRequest $request){
        $validated = $request->validated();

        Faculty::create($validated);
        return response([
            'code' => 200,
            'message' => 'created'
        ]);
    }

    public function show($id){

        $faculty = Faculty::where('id', $id)->get();

        return response([
            'code' => 200,
            'message' => 'View',
            'data' => FacultyResource::collection($faculty)
        ]);
    }

    public function update(FacultyRequest $request, $id)
    {
        $validated = $request->validated();

        Faculty::where('id', $id)->update($validated);
        return response([
            'code' => 200,
            'message' => 'updated'
        ]);
    }

    public function destroy($id)
    {
        Faculty::where('id', $id)->delete();
        return response([
            'code' => 200,
            'message' => 'deleted'
        ]);
    }

}
