<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class JudgesHasUser extends Model
{
    use HasFactory, HasRoles;
    protected $guarded = [
    ];

    public function judges(){
        return $this->belongsTo(User::class,'judge_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
