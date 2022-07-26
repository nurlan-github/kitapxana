<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacultyRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    public function index(){
        return CategoryResource::collection(Category::with('books')->get());
    }

    public function store(FacultyRequest $request){
        $validated = $request->validated();

        Category::create($validated);

        return Response::json(['success' => true, 'message' => 'created successfully!',
            'created' => $validated], 200);
    }

    public function show($id){

        $category = Category::where('id', $id)->get();

        return response([
            'code' => 200,
            'data' => CategoryResource::collection($category)
        ]);
    }

    public function update(FacultyRequest $request, $id)
    {
        $validated = $request->validated();

        Category::where('id', $id)->update($validated);
        return response([
            'code' => 200,
            'message' => 'updated'
        ]);
    }

    public function destroy($id)
    {
        Category::where('id', $id)->delete();
        return response([
            'code' => 200,
            'message' => 'deleted'
        ]);
    }


}
