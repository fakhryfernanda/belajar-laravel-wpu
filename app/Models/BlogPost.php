<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPost extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id']; // kebalikan dari fillable

    // menghubungkan tabel post dengan tabel kategori
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
