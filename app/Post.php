<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table= 'posts';


    public $fillable=['title', 'body', 'category_id', ];
    public $timestamps = true;

    public function category()
    {
        return $this->hasOne(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
