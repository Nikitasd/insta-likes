<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return $request->user();
    }
    public function show(User $user)
    {
        UserResource::withoutWrapping();

        return new UserResource($user);
    }
}
