<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteLotBoqLineAnswer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function lotBoq()
    {
        
        
        return $this->belongsTo(LotBoq::class);
    }
}
