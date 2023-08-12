<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePlaySubGroup extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function questions(){
        return $this->hasMany(RolePlayQuestion::class,'sub_group_id','id');
    }

    public function groups(){
        return $this->belongsTo(RolePlayGroup::class, 'id','group_id');
    }
}
