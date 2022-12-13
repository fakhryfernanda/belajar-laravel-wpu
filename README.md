## Collection and Tinker

`php artisan tinker`

``` php

$post->tile = '';
$post->excerpt = '';
$post->body = '';
$post->save();

Post::all();            // mengambil semua post
Post::first();          // mengambil post pertama
Post::pluck('title');   // mengambil seluruh title
Post::find(2);          // mengambil post dengan id=2

// Mass Assignment
protected $fillable = ['title', 'excerpt', 'body'];
BlogPost::create([
    'title' => '',
    'excerpt' => '',
    'body' => ''
]);
BlogPost::find(3)->update([
    'title' => 'judul baru'
]);
BlogPost::where('title', 'Dummy Post 2')->update([
    'title' => 'judul baru'
]);
```

// Cari kategori
``` php
BlogPost::where('category_id', 1)->get();
```

// Seed
```
php artisan db:seed
```

// Buat factory
`php artisan make:factory NamaFactory`

// Membuat model sekaligus dengan model, factory, dan seeder
`php artisan make:model Student -mfs`
