<?php

namespace App\Http\Controllers\Api;

use App\Adapters\ApiAdapter;
use App\DTO\CreateSuppDTO;
use App\DTO\UpdateSuppDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreForumRequest;
use App\Http\Resources\SupportResource;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{


    public function __construct(
        protected SupportService $service
    )
    {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
      
        //$supprot = Support::paginate()
        $supports = $this->service->paginate(
            page: $req->get('page', 1),
            maxPerPage: $req->get('per_page', 2),
            filter: $req->filter
        );


        return ApiAdapter::toJson($supports);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreForumRequest $request)
    {
        $support = $this->service->create(
            CreateSuppDTO::makeFromReq($request)
        );

        return new SupportResource($support);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!$support = $this->service->getSingle($id)) {

            return response()->json([
                'error' => 'Not Found'
            ], 404);

        }

        return new SupportResource($support);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreForumRequest $request, string $id)
    {
        $sup = $this->service->update(
            UpdateSuppDTO::makeFromReq($request, $id)
        );

        if(!$sup) {
            return response()->json([
                'error' => 'Not found'
            ], 404);
        }

        return new SupportResource($sup);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!$this->service->getSingle($id)) {
            return response()->json([
                'error' => 'Not Found'
            ], 404);
        }

        $this->service->delete($id);

        return response()->json([], 204);
    }
}
