<?php

namespace App\Http\Controllers\blade;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::get();
        $categories = Category::get();
        $authors = Author::get();
        return view('books.index', ['books' => $books, 'categories' => $categories, 'authors' => $authors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $authors = Author::get();
        return view('books.create', ['categories' => $categories, 'authors' => $authors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        Book::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'category_id' => $request->input('category_id'),
            'author_id' => $request->input('author_id')
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Book::find($id);
        $categories = Category::get();
        $authors = Author::get();
        return view('books.edit', ['books' => $books, 'categories' => $categories, 'authors' => $authors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        Book::where('id', $id)->update([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'category_id' => $request->input('category_id'),
            'author_id' => $request->input('author_id')
        ]);

        return response()->redirectTo('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);
        return response()->redirectTo('/books');
    }
}
