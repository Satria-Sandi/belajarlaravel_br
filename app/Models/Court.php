<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourtType;

class Court extends Model
{
    use HasFactory;
    protected $table = 'court';

    public function type(){
        return $this->belongsTo(CourtType::class, 'court_type_id');
    }
}
