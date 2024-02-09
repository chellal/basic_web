<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $guarded = []; // All fields are fillables

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}