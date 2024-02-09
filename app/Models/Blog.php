<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = []; // All fields are fillables

    public function category() // relation between Blog and BlogCategory
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    } // End Function

}
