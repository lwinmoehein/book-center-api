<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $languages = request()->languages;
        $categories = request()->categories;

        if ($languages != null)
            $languages = explode(',', $languages);
        if ($categories != null)
            $categories = explode(',', $categories);

        $booksQuery = Book::query();
        if ($languages != null && count($languages) > 0)
            $booksQuery = $booksQuery->languaged($languages);
        if ($categories != null && count($categories) > 0)
            $booksQuery = $booksQuery->categorized($categories);

        $books = $booksQuery->paginate(6)->appends(request()->except(['page', '_token']));
        return BookResource::collection($books);
    }


    public function forYou()
    {
        //
        $userCategories = Auth::user()->categories->pluck('id');
        $languages = request()->languages;


        $bookQuery = Book::query()->categorized($userCategories);

        if ($languages != null)
            $languages = explode(',', $languages);


        if ($languages != null && count($languages) > 0)
            $bookQuery = $bookQuery->languaged($languages);

        $books = $bookQuery->paginate(6)->appends(request()->except(['page', '_token']));
        return BookResource::collection($books);
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
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
        $book->load('categories','authors');
        $book->load(['reviews' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }]);
        return new BookResource($book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
