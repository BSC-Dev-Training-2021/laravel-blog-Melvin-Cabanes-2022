<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_type extends Model
{
    protected $fillable = ['name'];

    //category_types has one blogpost/categories
}
