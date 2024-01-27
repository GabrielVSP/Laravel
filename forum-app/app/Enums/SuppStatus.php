<?php

namespace App\Enums;

enum SuppStatus: string {

    case a = 'Open';
    case p = 'Pendent';
    case c = 'Closed';

    public static function fromValue(string $value): string {
        foreach(self::cases() as $status) {
            if($value == $status->name) {
                return $status->value;
            }
        }

        throw new \ValueError("$value Doesn't exists.");
    }

}