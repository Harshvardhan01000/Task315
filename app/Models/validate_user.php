<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class validate_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'age',
        'roll'
    ];
    protected $table = 'validate_users';
}
