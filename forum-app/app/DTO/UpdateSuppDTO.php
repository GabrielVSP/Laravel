<?php

namespace App\DTO;

use App\Enums\SuppStatus;
use App\Http\Requests\StoreForumRequest;

class UpdateSuppDTO {

    public function __construct(
        public string $id,
        public string $subject,
        public SuppStatus $status,
        public string $content
    )
    {

    }

    public static function makeFromReq(StoreForumRequest $req, string $id = null) {

        return new self(
            $id ?? $req->id,
            $req->subject,
            SuppStatus::a,
            $req->content
        );

    }

}
