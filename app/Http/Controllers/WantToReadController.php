<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreWantToReadRequest;
use App\Http\Requests\UpdateWantToReadRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Http\Resources\BookResource;

class WantToReadController extends Controller
{
    //
    public function index()
    {

        $books = Auth::user()->wantToReadBooks()->orderBy('want_to_read_books.created_at','desc')->paginate(6)->appends(request()->except(['page', '_token']));
        return BookResource::collection($books);
    }

    public function show(Book $book)
    {
        $userId = Auth::user()->id;
        $bookId = $book->id;

        $wantToReadBooks = Book::whereHas('wantToReadUsers', function ($query) use ($userId,$bookId) {
            return $query->where('user_id', '=', $userId)->where('book_id','=',$bookId);
        })->get();


        return BookResource::collection($wantToReadBooks);
    }

    public function store(StoreWantToReadRequest $request)
    {
        Auth::user()->wantToReadBooks()->attach($request->book_id);
        return  response()->json(["message" => "success"], 200);
    }
    public function update(UpdateWantToReadRequest $request)
    {
        Auth::user()->wantToReadBooks()->sync($request->book_ids);
        return  response()->json(["message" => "success"], 200);
    }

    public function destroy(Book $book)
    {
        Auth::user()->wantToReadBooks()->detach($book->id);
        return  response()->json(["message" => "success"], 200);
    }
}
