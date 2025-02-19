<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourtType extends Model
{
    use HasFactory;

    protected $table = 'CourtType';

    public function court(){
        return $this->hasmany(court::class);
    }
}
