<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function facility()
    {
        
        
        return $this->belongsTo(Facility::class);
    }

    public function lga()
    {
            
        return $this->belongsTo(Lga::class);
    }

    public function lot()
    {
            
        return $this->belongsTo(Lot::class);
    }

    public function siteLineBoq()
    {
        
        return $this->hasMany(SiteLotBoqLineAnswer::class);
    }

    public function images()
    {
        return $this->morphMany(MediaBank::class, 'mediabankable');
    }

    public function site_profile()
    {
        
        return $this->hasMany(SiteProfile::class);
    }

    public function supervision_team()
    {
        
        return $this->belongsTo(SupervisionTeam::class);
    }

    public function contracts()
    {
        
        return $this->belongsTo(Contract::class, 'contract_id', 'id');
    }

    public function percent_completion()
    {
        
        return $this->hasOne(SitePercentCompletion::class, 'site_id','id');
    }



}
