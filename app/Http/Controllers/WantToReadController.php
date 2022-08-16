<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreWantToReadRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Http\Resources\BookResource;

class WantToReadController extends Controller
{
    //
    public function index()
    {

        $books = Book::query()->wantToRead(Auth::user()->id)->paginate(6)->appends(request()->except(['page', '_token']));
        return BookResource::collection($books);
    }

    public function store(StoreWantToReadRequest $request)
    {
        Auth::user()->wantToReadBooks()->sync($request->book_ids);
        return  response()->json(["message" => "success"], 200);
    }
}
