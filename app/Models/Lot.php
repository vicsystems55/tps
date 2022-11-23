<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contractor()
    {
        
        
        return $this->belongsTo(Contractor::class);
    }

    public function state()
    {
        
        return $this->belongsTo(State::class);
    }

    public function lga()
    {
        
        return $this->belongsTo(Lga::class);
    }

    public function facility()
    {
        
        return $this->belongsTo(Facility::class);
    }

    public function sites()
    {
        
        return $this->hasMany(Site::class);
    }

    
}
