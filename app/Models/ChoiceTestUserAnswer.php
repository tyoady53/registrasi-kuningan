<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoiceTestUserAnswer extends Model
{
    use HasFactory;
    protected $guarded = [
    ];

    public function question(){
        return $this->belongsTo(ChoiceTestQuestion::class,'id','question_id');
    }
}
