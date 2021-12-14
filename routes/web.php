<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Harun Baharuddin",
        "email" => "h06219002@student.uinsby.ac.id",
        "image" => "harun.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Harun Baharuddin",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi dolorum placeat itaque iste, nulla temporibus dolores fuga impedit. Excepturi nisi non asperiores dicta, nam quis tempore expedita placeat labore nulla illo officia exercitationem autem beatae facilis. Aperiam quo distinctio eius deleniti corporis tenetur quaerat pariatur, expedita ipsum possimus ratione porro! In voluptatem saepe beatae at culpa atque. Nesciunt magnam numquam veritatis beatae vel, nobis corporis officia! Eos, consequuntur. Et quod nihil itaque amet. Inventore, cumque tenetur? Veniam, ut debitis?"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Jeh",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo magnam dolores voluptatum nostrum quis quasi explicabo reprehenderit voluptatibus molestiae, obcaecati aut voluptatem! Quidem quibusdam sequi inventore, eligendi consectetur quam reprehenderit quis voluptate quod perspiciatis accusamus magni corrupti temporibus fugiat rerum saepe recusandae ab? Tempora, vel natus. In iste rem, iure sunt porro veniam animi repellendus sed dolorum unde non explicabo ullam! Voluptatem, assumenda adipisci repellat neque dolorum inventore dicta ipsa illo asperiores vitae reprehenderit ducimus eum soluta facere placeat cumque tenetur ex cum eos sint nostrum. Nihil ad alias architecto rem, excepturi consequuntur porro repudiandae minima a harum illum fugiat!"
    ]
];

    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman sigle post
Route::get('posts/{slug}', function($slug) {$blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Harun Baharuddin",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi dolorum placeat itaque iste, nulla temporibus dolores fuga impedit. Excepturi nisi non asperiores dicta, nam quis tempore expedita placeat labore nulla illo officia exercitationem autem beatae facilis. Aperiam quo distinctio eius deleniti corporis tenetur quaerat pariatur, expedita ipsum possimus ratione porro! In voluptatem saepe beatae at culpa atque. Nesciunt magnam numquam veritatis beatae vel, nobis corporis officia! Eos, consequuntur. Et quod nihil itaque amet. Inventore, cumque tenetur? Veniam, ut debitis?"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Jeh",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo magnam dolores voluptatum nostrum quis quasi explicabo reprehenderit voluptatibus molestiae, obcaecati aut voluptatem! Quidem quibusdam sequi inventore, eligendi consectetur quam reprehenderit quis voluptate quod perspiciatis accusamus magni corrupti temporibus fugiat rerum saepe recusandae ab? Tempora, vel natus. In iste rem, iure sunt porro veniam animi repellendus sed dolorum unde non explicabo ullam! Voluptatem, assumenda adipisci repellat neque dolorum inventore dicta ipsa illo asperiores vitae reprehenderit ducimus eum soluta facere placeat cumque tenetur ex cum eos sint nostrum. Nihil ad alias architecto rem, excepturi consequuntur porro repudiandae minima a harum illum fugiat!"
    ]
];

$new_post = [];
foreach($blog_posts as $post){
    if($post["slug"] === $slug){
        $new_post = $post;
    }
}


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});