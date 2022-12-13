<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Fakhry Fernanda',
            'email' => 'fakhryfernanda@gmail.com',
            'password' => bcrypt('1234')
        ]);

        User::create([
            'name' => 'Aldi Taher',
            'email' => 'alditaher@gmail.com',
            'password' => bcrypt('1234')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        BlogPost::create([
             'title' => 'Judul pertama',
             'slug' => 'judul-pertama',
             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptates neque, harum minus exercitationem explicabo. Adipisci placeat numquam minima possimus a nostrum omnis! Qui officia laudantium ex tempore, repellendus eum consequatur suscipit sapiente dolorem blanditiis sed provident repudiandae quam atque deserunt fugit.',
             'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptates neque, harum minus exercitationem explicabo. Adipisci placeat numquam minima possimus a nostrum omnis! Qui officia laudantium ex tempore, repellendus eum consequatur suscipit sapiente dolorem blanditiis sed provident repudiandae quam atque deserunt fugit. Iusto hic eum aliquam in, quae eos magni cumque, laborum obcaecati odit minus quam quos ex!</p><p> Eveniet quidem suscipit nisi iure dolorem hic mollitia. Impedit rem veniam ullam quis ex voluptatum earum cupiditate sequi temporibus distinctio neque et, exercitationem molestiae assumenda quisquam, nostrum odit excepturi harum?</p><p>Autem, recusandae accusamus nam unde veritatis quisquam corrupti sit aliquam reiciendis doloribus maxime magnam dolores incid</p>',
             'category_id' => 1,
             'user_id' => 1
        ]);

        BlogPost::create([
             'title' => 'Judul kedua',
             'slug' => 'judul-kedua',
             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptates neque, harum minus exercitationem explicabo. Adipisci placeat numquam minima possimus a nostrum omnis! Qui officia laudantium ex tempore, repellendus eum consequatur suscipit sapiente dolorem blanditiis sed provident repudiandae quam atque deserunt fugit.',
             'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptates neque, harum minus exercitationem explicabo. Adipisci placeat numquam minima possimus a nostrum omnis! Qui officia laudantium ex tempore, repellendus eum consequatur suscipit sapiente dolorem blanditiis sed provident repudiandae quam atque deserunt fugit. Iusto hic eum aliquam in, quae eos magni cumque, laborum obcaecati odit minus quam quos ex!</p><p> Eveniet quidem suscipit nisi iure dolorem hic mollitia. Impedit rem veniam ullam quis ex voluptatum earum cupiditate sequi temporibus distinctio neque et, exercitationem molestiae assumenda quisquam, nostrum odit excepturi harum?</p><p>Autem, recusandae accusamus nam unde veritatis quisquam corrupti sit aliquam reiciendis doloribus maxime magnam dolores incid</p>',
             'category_id' => 1,
             'user_id' => 2
        ]);

        BlogPost::create([
             'title' => 'Judul ketiga',
             'slug' => 'judul-ketiga',
             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptates neque, harum minus exercitationem explicabo. Adipisci placeat numquam minima possimus a nostrum omnis! Qui officia laudantium ex tempore, repellendus eum consequatur suscipit sapiente dolorem blanditiis sed provident repudiandae quam atque deserunt fugit.',
             'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptates neque, harum minus exercitationem explicabo. Adipisci placeat numquam minima possimus a nostrum omnis! Qui officia laudantium ex tempore, repellendus eum consequatur suscipit sapiente dolorem blanditiis sed provident repudiandae quam atque deserunt fugit. Iusto hic eum aliquam in, quae eos magni cumque, laborum obcaecati odit minus quam quos ex!</p><p> Eveniet quidem suscipit nisi iure dolorem hic mollitia. Impedit rem veniam ullam quis ex voluptatum earum cupiditate sequi temporibus distinctio neque et, exercitationem molestiae assumenda quisquam, nostrum odit excepturi harum?</p><p>Autem, recusandae accusamus nam unde veritatis quisquam corrupti sit aliquam reiciendis doloribus maxime magnam dolores incid</p>',
             'category_id' => 2,
             'user_id' => 1
        ]);

        BlogPost::create([
            'title' => 'Judul keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptates neque, harum minus exercitationem explicabo. Adipisci placeat numquam minima possimus a nostrum omnis! Qui officia laudantium ex tempore, repellendus eum consequatur suscipit sapiente dolorem blanditiis sed provident repudiandae quam atque deserunt fugit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptates neque, harum minus exercitationem explicabo. Adipisci placeat numquam minima possimus a nostrum omnis! Qui officia laudantium ex tempore, repellendus eum consequatur suscipit sapiente dolorem blanditiis sed provident repudiandae quam atque deserunt fugit. Iusto hic eum aliquam in, quae eos magni cumque, laborum obcaecati odit minus quam quos ex!</p><p> Eveniet quidem suscipit nisi iure dolorem hic mollitia. Impedit rem veniam ullam quis ex voluptatum earum cupiditate sequi temporibus distinctio neque et, exercitationem molestiae assumenda quisquam, nostrum odit excepturi harum?</p><p>Autem, recusandae accusamus nam unde veritatis quisquam corrupti sit aliquam reiciendis doloribus maxime magnam dolores incid</p>',
            'category_id' => 2,
            'user_id' => 2
       ]);
    }
}
