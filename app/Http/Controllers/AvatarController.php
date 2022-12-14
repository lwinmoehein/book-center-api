<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function store(Request $request)
    {
      try {
          $user = Auth::user();
          $filePath = Storage::disk('local')
              ->putFile('public/avatars/user-'.$user->id, $request->file, 'public');
          $user->avatar = $filePath;
          $user->save();
      } catch (Exception $exception) {
          return response()->json(['message' => $exception->getMessage()], 409);
      }
          return new UserResource($user);
    }
}
