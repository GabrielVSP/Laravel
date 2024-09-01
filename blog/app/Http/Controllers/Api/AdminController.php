<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Posts;

class AdminController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Creates a new post
     */

     public function create(Request $req)
     {

        $data = $req->validate([
            'title' => 'required|max:100',
            'title' => 'required|max:500'
        ]);

        Posts::create($data);

        return response()->json(['message' => 'Created suscefully!'], 201);

     }
    
}
