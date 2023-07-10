<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoiceTestQuestion extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function case(){
        return $this->belongsTo(ChoiceTestCase::class,'case_id','id');
    }

    public function user_answer(){
        return $this->hasMany(ChoiceTestUserAnswer::class,'question_id','id');
    }

    public function answer_options(){
        return $this->hasMany(ChoiceTestAnswer::class,'question_id','id');
    }
}
