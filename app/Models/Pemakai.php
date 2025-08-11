<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pemakai extends Authenticatable
{
    protected $table = 'pemakai';
    protected $primaryKey = 'Kd_pemakai';
    public $timestamps = false;

    protected $fillable = [
        'Username',
        'Password',
    ];

    protected $hidden = [
        'Password',
    ];

    public function getAuthPassword()
    {
        return $this->Password;
    }
}
