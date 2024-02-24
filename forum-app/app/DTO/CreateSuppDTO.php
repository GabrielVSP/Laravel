<?php

namespace App\DTO;

use App\Enums\SuppStatus;
use App\Http\Requests\StoreForumRequest;

class CreateSuppDTO {

    public function __construct(
        public string $subject,
        public SuppStatus $status,
        public string $content
    )
    {}

    public static function makeFromReq(StoreForumRequest $req) {

        return new self(
            $req->subject,
            SuppStatus::a,
            $req->content
        );

    }

}