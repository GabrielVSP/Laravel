<?php

namespace App\DTO;

use App\Http\Requests\StoreForumRequest;

class CreateSuppDTO {

    public function __construct(
        public string $subject,
        public string $status,
        public string $content
    )
    {

    }

    public static function makeFromReq(StoreForumRequest $req) {

        return new self(
            $req->subject,
            'a',
            $req->content
        );

    }

}