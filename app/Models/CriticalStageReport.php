<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriticalStageReport extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function criticalStageQuestion()
    {
            
        return $this->belongsTo(CriticalStageQuestion::class);
    }
}
