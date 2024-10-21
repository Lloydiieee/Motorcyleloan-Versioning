<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
    use HasFactory;

    protected $table = 't_category';
    protected $primaryKey = 'cat_id';    
    protected $fillable = [
        'cat_name',
        'cat_description',
    ];
}
