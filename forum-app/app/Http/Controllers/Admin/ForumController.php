<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSuppDTO;
use App\DTO\UpdateSuppDTO;
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
    
    public function index(Request $req, Support $model) {

        $supports = $this->service->paginate(
            page: $req->get('page', 1),
            maxPerPage: $req->get('per_page', 2),
            filter: $req->filter
        );

        $filters = ['filter' => $req->get('filter', '')];
        //$supports = $model->paginate(1);

        $xss = "<script>alert('oi')</script>";

        return view('admin/forum/index', compact('supports', 'filters', 'xss'));

    }

    public function create() {

        return view('admin/forum/create');

    }

    public function store(StoreForumRequest $request, Support $sup) {

        // $data = $request->validated();
        // $data['status'] = 'a';

        // $sup->create($data);

        $this->service->create(CreateSuppDTO::makeFromReq($request));

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
        $this->service->update(UpdateSuppDTO::makeFromReq($request));
        //$support->update($request->only(['subject', 'content']));

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
