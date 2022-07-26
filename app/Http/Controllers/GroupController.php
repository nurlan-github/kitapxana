<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\Http\Requests\GroupsRequest;
use App\Http\Resources\GroupResource;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class GroupController extends Controller
{
    public function index(){
        return GroupResource::collection(Group::get());
    }

    public function store(GroupRequest $request){
        $validated = $request->validated();

        Group::create($validated);

        return Response::json(['success' => true, 'message' => 'created successfully!',
            'created' => $validated], 200);
    }

    public function show($id){

        $gr = Group::where('id', $id)->get();

        return response([
            'code' => 200,
            'data' => GroupResource::collection($gr)
        ]);
    }

    public function update(GroupRequest $request, $id)
    {
        $validated = $request->validated();

        Group::where('id', $id)->update($validated);
        return response([
            'code' => 200,
            'message' => 'updated'
        ]);
    }

    public function destroy($id)
    {
        Group::where('id', $id)->delete();
        return response([
            'code' => 200,
            'message' => 'deleted'
        ]);
    }
}
