<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Category extends Model
{
    public $guarded = [''];
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
