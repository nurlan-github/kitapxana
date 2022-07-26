<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return BookResource::collection(Book::get());
    }

    public function store(BookRequest $request)
    {
        $validated = $request->validated();

        Book::create($validated);
        return response([
            'code' => 200,
            'message' => 'created'
        ]);
    }

    public function show($id){

        $books = Book::where('id', $id)->get();

        return response([
            'code' => 200,
            'data' => BookResource::collection($books)
        ]);
    }

    public function update(BookRequest $request, $id)
    {
        $validated = $request->validated();

        $books = Book::where('id', $id)->update($validated);
        return response([
            'code' => 200,
            'message' => 'updated'
        ]);
    }

    public function destroy($id)
    {
        Book::where('id', $id)->delete();
        return response([
            'code' => 200,
            'message' => 'deleted'
        ]);
    }
}
