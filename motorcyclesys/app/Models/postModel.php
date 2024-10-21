<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postModel extends Model
{
    use HasFactory;
    protected $table = 't_post';
    protected $primaryKey = 'post_id';    
    protected $fillable = [
        'post_title',
        'post_category',
        'post_content',
        'post_comment',
        'post_thumbnail',
        'post_isActive',
        'post_by',
    ];
}
