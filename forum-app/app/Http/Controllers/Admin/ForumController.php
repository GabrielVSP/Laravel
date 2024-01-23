<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    
    public function index() {

        $support = new Support();
        $supports = $support->all();

        $xss = "<script>alert('oi')</script>";

       // dd($supports);

        return view('admin/forum/index', compact('supports', 'xss'));

    }

    public function create() {

        return view('admin/forum/create');

    }

    public function store(Request $request) {

        dd($request->all());

    }

}
