<?php

namespace App\Http\Controllers\blade;

use App\Http\Controllers\Controller;
use App\Http\Requests\FacultyRequest;
use App\Models\Faculty;
use App\Models\Group;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::get();
        return view('faculties.index', [
            'faculties' => $faculties
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|unique'
        ]);

        Faculty::create([
            'name'=>$request->input('name')
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faculties = Faculty::get();
        
        $groups = Group::join('faculties', 'groups.faculty_id', '=', 'faculties.id')->where('groups.faculty_id', $id);
        return view('faculties.show', compact('groups'),[
            'faculties' => $faculties
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculty = Faculty::find($id);
        return view('faculties.edit', [
            'faculties' => $faculty
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FacultyRequest $request, $id)
    {
        Faculty::where('id', $id)->update([
            'name'=>$request->input('name')
        ]);
        return response()->redirectTo('/faculties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Faculty::destroy($id);
        return response()->redirectTo('/faculties');
    }
}
