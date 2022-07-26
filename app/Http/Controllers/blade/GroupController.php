<?php

namespace App\Http\Controllers\blade;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupRequest;
use App\Models\Faculty;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::get();
        $groups = Group::get();
        return view('groups.index', [
            'groups' => $groups,
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
        $faculties = Faculty::get();
        return view('groups.create', ['faculties' => $faculties]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GroupRequest $request)
    {
        Group::create([
            'name'=>$request->input('name'),
            'faculty_id'=>$request->input('faculty_id')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::join('groups', 'students.group_id', '=', 'groups.id')->where('students.group_id', $id);
        return view('groups.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Group::find($id);
        $faculties = Faculty::get();
        return view('groups.edit',['groups'=>$group, 'faculties'=>$faculties]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GroupRequest $request, $id)
    {
        Group::where('id', $id)->update([
            'name' => $request->input('name'),
            'faculty_id' => $request->input('faculty_id')
        ]);
        return response()->redirectTo('/groups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::destroy($id);
        return response()->redirectTo('/groups');
    }
}
