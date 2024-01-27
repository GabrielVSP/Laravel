<?php

use App\Enums\SuppStatus;

if (!function_exists('getStatusSupp')) {

    function getStatusSupp(string $status) {
        //dd(1);
        return SuppStatus::fromValue($status);

    }

}