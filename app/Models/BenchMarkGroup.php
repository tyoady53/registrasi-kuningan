<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenchMarkGroup extends Model
{
    use HasFactory;

    public function questions(){
        return $this->hasMany(BenchMarkQuestion::class,'group_id','id');
    }
}
