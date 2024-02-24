<?php

namespace App\Models;

use App\Enums\SuppStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $fillable = [
        "subject",
        "content",
        "status"
    ];

    public function status(): Attribute {
        return Attribute::make(
            set: fn (SuppStatus $status) => $status->name,
        );
    }

}
