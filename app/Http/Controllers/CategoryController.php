<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Resources\BookResource;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return CategoryResource::collection($categories);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        $category = $category->load('books', 'books.averageRating');
        return response()->json([
            "data" => new CategoryResource($category)
        ]);
    }
    public function getBooks(Category $category)
    {
        $languages = request()->languages;
        $categories = [$category->id];

        $booksQuery = Book::query();
        if ($languages != null && count($languages) > 0)
            $booksQuery = $booksQuery->languaged($languages);
        if ($categories != null && count($categories) > 0)
            $booksQuery = $booksQuery->categorized($categories);

        $books = $booksQuery->with('averageRating')->orderBy('created_at', 'desc')->paginate(10)->appends(request()->except(['page', '_token']));
        return BookResource::collection($books);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
