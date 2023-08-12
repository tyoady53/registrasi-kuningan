<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoiceTestAnswer extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    protected $hidden = [
        'value',
    ];

    public function question(){
        return $this->belongsTo(ChoiceTestQuestion::class,'id','question_id');
    }
}
