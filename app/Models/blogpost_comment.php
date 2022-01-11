<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogpost_comment extends Model
{
    
    protected $fillable = ['blogpost_id', 'comment'];

    public function blogpost()
    {
        return $this->belongsTo(blogpost::class);
    }
}
