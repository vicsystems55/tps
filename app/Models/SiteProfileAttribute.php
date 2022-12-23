<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteProfileAttribute extends Model
{
    use HasFactory;

    
    public function siteAttributes()
    {
        return $this->hasOne(SiteProfile::class);
    }
}
