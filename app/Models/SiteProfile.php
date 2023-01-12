<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteProfile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function site_attributes()
    {
        return $this->belongsTo(SiteProfileAttribute::class, 'site_profile_attribute_id', 'id');
    }


}
