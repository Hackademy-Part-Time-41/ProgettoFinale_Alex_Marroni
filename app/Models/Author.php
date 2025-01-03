<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;

    protected $fillable=['name','surname','phone'];

    public function articles(){
        return $this->hasMany(Article::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
