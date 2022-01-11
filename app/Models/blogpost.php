<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\blogpost_comment;
use App\Http\Controllers\blogpostController;

class blogpost extends Model
{
    protected $fillable = ['title', 'description', 'content', 'image'];

    public function comments()
    {
        return $this->hasMany(blogpost_comment::class);
    }
}
