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

    public function store(Request $request, Support $sup) {

        $data = $request->all();
        $data['status'] = 'a';

        $sup->create($data);

       return redirect()->route('forum.index');

    }

    public function show(string | int $id) {

        //$support = Support::find($id);
        $support = Support::where('id', '=', $id)->first();

        if(!$support) {

            return redirect()->back();

        }

        return view('admin/forum/show', compact('support'));

    }

    public function edit(string | int $id) {

        $support = Support::where('id', '=', $id)->first();

        if(!$support) {

            return back();

        }

        return view('admin/forum/edit', compact('support'));

    }

    public function update(string | int $id, Request $request, Support $support) {

        if(!$support = Support::where('id', '=', $id)->first()) {

            return back();

        }

        //$support->subject = $request->subject
        //$support->save()
        $support->update($request->only(['subject', 'content']));

        return redirect()->route('forum.index');

    }

    public function delete(string | int $id, Support $support) {

        if(!$support = Support::find($id)) {

            return back();

        }

        $support->delete();

        return redirect()->route('forum.index');

    }

}
