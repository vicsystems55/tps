<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function state()
    {
        
        
        return $this->belongsTo(State::class);
    }

    public function lots()
    {
        
        return $this->hasMany(Lot::class);
    }

    public function sites()
    {
        
        
        return $this->hasMany(Site::class);
    }
}
