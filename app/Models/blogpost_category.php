<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogpost_category extends Model
{
    protected $fillable = ['blogpost_id', 'category_id'];
}
