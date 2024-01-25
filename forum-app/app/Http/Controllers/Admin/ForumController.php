<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreForumRequest;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;

class ForumController extends Controller
{

    public function __construct(
        protected SupportService $service
    )
    {

        

    }
    
    public function index(Request $req) {

        $supports = $this->service->getAll($req->filter);

        $xss = "<script>alert('oi')</script>";

       // dd($supports);

        return view('admin/forum/index', compact('supports', 'xss'));

    }

    public function create() {

        return view('admin/forum/create');

    }

    public function store(StoreForumRequest $request, Support $sup) {

        $data = $request->validated();
        $data['status'] = 'a';

        $sup->create($data);

       return redirect()->route('forum.index');

    }

    public function show(string | int $id) {

        //$support = Support::find($id);
        $support = $this->service->getSingle($id);

        if(!$support) {

            return redirect()->back();

        }

        return view('admin/forum/show', compact('support'));

    }

    public function edit(string | int $id) {

        //$support = Support::where('id', '=', $id)->first();
        $support = $this->service->getSingle($id);

        if(!$support) {

            return back();

        }

        return view('admin/forum/edit', compact('support'));

    }

    public function update(string | int $id, StoreForumRequest $request, Support $support) {

        if(!$support = Support::where('id', '=', $id)->first()) {

            return back();

        }

        //$support->subject = $request->subject
        //$support->save()
        $support->update($request->only(['subject', 'content']));

        return redirect()->route('forum.index');

    }

    public function delete(string | int $id, Support $support) {

        if(!$support = $this->service->getSingle($id)) {

            return back();

        }

        $this->service->delete($id);

        return redirect()->route('forum.index');

    }

}
