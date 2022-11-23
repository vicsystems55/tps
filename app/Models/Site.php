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
}
