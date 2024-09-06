<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // $client = new Client();
        // $res = $client->get('https://http.dog/404.jpg');

        // $posts = Http::get('http://127.0.0.1:8000/api/post');
        // dd($posts);


        return view('welcome');

    }

    public function blog()
    {
       
        $data = json_decode(PostController::index());

        return view('blog', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        $data = Posts::find($id);

        return view('post', [
            'data' => $data
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
