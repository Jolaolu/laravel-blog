<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable=['title',  'category_id', 'order'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
