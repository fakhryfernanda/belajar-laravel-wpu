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
    protected $with = ['author', 'category'];

    // menghubungkan tabel post dengan tabel kategori
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // menggunakan nama fungsi author tapi yang dipanggil di database tetap user_id
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
