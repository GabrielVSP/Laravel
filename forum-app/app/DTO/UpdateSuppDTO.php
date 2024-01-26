<?php

namespace App\DTO;
use App\Http\Requests\StoreForumRequest;

class UpdateSuppDTO {

    public function __construct(
        public string $id,
        public string $subject,
        public string $status,
        public string $content
    )
    {

    }

    public static function makeFromReq(StoreForumRequest $req) {

        return new self(
            $req->id,
            $req->subject,
            'a',
            $req->content
        );

    }

}
