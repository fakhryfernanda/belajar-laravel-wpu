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

    public function scopeFilter($query, array $filters) {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //           ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });

        // $query->when($filters['category'] ?? false, function($query, $category) {
        //     return $query->whereHas('category', function($query) use ($category) {
        //         $query->where('slug', $category);
        //     });
        // });

        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn($query) =>
                $query->where('slug', $category)
            )
        );
    }
}
