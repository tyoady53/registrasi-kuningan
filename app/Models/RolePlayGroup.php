<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePlayGroup extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function sub_groups(){
        return $this->hasMany(RolePlaySubGroup::class,'group_id','id');
    }
}
