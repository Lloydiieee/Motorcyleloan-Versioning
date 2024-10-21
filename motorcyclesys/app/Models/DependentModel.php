<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DependentModel extends Model
{
    protected $table = 't_dependents';
    protected $fillable = [
        'dep_name',
        'dep_age',
        'dep_school_status',
        'dep_school_name',
        'dep_address',
        'dep_matriculation',
        'dep_occupation',
        'dep_company',
        'dep_income',
    ];
}
