<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Post extends Model
{

    use HasFactory, HasApiTokens, Notifiable;

    protected $fillable = ['title', 'body', 'user_id'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function imagenes()
    {
        return $this->hasMany(Image::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function categorys()
    {
        return $this->belongsToMany(Category::class);
    }
}
