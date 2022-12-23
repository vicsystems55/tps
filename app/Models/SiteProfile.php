<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteProfile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function siteAttributes()
    {
        return $this->hasOne(SiteProfileAttribute::class);
    }
}
