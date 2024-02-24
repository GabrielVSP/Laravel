<?php

namespace App\Adapters;

use App\Http\Resources\DefaultResource;
use App\Repositories\PaginateInterface;

class ApiAdapter {

    public static function toJson(
        PaginateInterface $data
    ) {

        return  DefaultResource::collection($data->items())
                                ->additional([
                                    'meta' => [
                                        'total' => $data->total(),
                                        'firstPage' => $data->isFirst(),
                                        'lastPage' => $data->isLast(),
                                        'currentPage' => $data->currentPage(),
                                        'nextPage' => $data->nextPage(),
                                        'previousPage' => $data->previousPage()
                                    ]
        ]);
        
    }

}
