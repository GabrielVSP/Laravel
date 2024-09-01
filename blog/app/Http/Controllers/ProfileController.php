<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Posts;

use function Psy\debug;

class ProfileController extends Controller
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
     * Display the posts table
     */
    public function posts(Request $req): View
    {

        $posts = Posts::all();

        return view('admin.posts', compact('posts'));
    }

    /**
     * Display the create post form
     */
    public function postCreate(Request $req): View
    {

        return view('admin.postCreate');
    }

     /**
     * Creates a new post
     */
    public function create(Request $req)
    {

       $data = $req->validate([
           'title' => 'required|max:100',
           'content' => 'required|max:500'
       ]);

       Posts::create($data);

       return redirect::route('admin.posts')->with('success', 'Created suscefully!');

    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
