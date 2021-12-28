<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['title', 'description', 'content'];

//make a method to show all posts from the database
    // public function showPost($session) {
    //     return $session->get('posts');
    // }
}
