<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Http\Requests\BookRequest;
use App\Http\Resources\AuthorResource;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AuthorController extends Controller
{
    public function index(){
        return AuthorResource::collection(Author::with('books')->get());
    }

    public function store(AuthorRequest $request){
        $validated = $request->validated();

        Author::create($validated);

        return Response::json(['success' => true, 'message' => 'created successfully!',
            'created' => $validated], 200);
    }

    public function show($id){

        $category = Author::where('id', $id)->get();

        return response([
            'code' => 200,
            'data' => AuthorResource::collection($category)
        ]);
    }

    public function update(AuthorRequest $request, $id)
    {
        $validated = $request->validated();

        Author::where('id', $id)->update($validated);
        return response([
            'code' => 200,
            'message' => 'updated'
        ]);
    }

    public function destroy($id)
    {
        Author::where('id', $id)->delete();
        return response([
            'code' => 200,
            'message' => 'deleted'
        ]);
    }
}
