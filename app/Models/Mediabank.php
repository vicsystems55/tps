<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediabank extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function mediabankable()
    {
        return $this->morphTo();
    }
}
