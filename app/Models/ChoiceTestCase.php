<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Question\ChoiceQuestion;

class ChoiceTestCase extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function questions(){
        return $this->hasMany(ChoiceTestQuestion::class,'case_id','id');
    }
}
