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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Frans Sebastian",
        "email" => "franssebastian15@gmail.com",
        "image" => "Frans P1.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "First title post",
            "slug" => "first-title-post",
            "author" => "Frans Sebastian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, quia culpa suscipit expedita quaerat magnam neque deserunt corrupti asperiores voluptates animi sequi placeat laborum unde nemo hic excepturi deleniti ipsum id quasi numquam vitae ullam. Rem itaque non nulla commodi ratione corrupti tempora incidunt maxime facilis nam necessitatibus nesciunt est esse sit delectus sint adipisci, quo sed optio aliquid hic sunt, voluptates sequi voluptas. Nesciunt porro quia, iste, vero architecto fugiat soluta illum cum a, ex aperiam et maiores distinctio."
        ],
        [
            "title" => "Second title post",
            "slug" => "second-title-post",
            "author" => "Frans Sebastian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque magnam deleniti tenetur quasi eligendi, aspernatur vitae explicabo beatae ratione, debitis dolor exercitationem velit tempore illo eveniet aperiam maiores nihil est. Delectus explicabo incidunt suscipit nulla, laboriosam sequi perferendis, similique modi aspernatur aperiam eaque! Aliquid, voluptatum sunt dolorem repellendus quo voluptates tempore, voluptatem necessitatibus ratione iste omnis porro fugiat neque laboriosam nulla explicabo. Facere nemo porro voluptatum placeat nisi, cum repellendus odit recusandae adipisci quo neque vel sit autem pariatur molestiae consequatur ipsa deserunt laudantium iusto consequuntur iste ipsum voluptates aut nam. Nobis at doloribus voluptas voluptatibus non distinctio consequuntur sapiente?"
        ]

    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

/* Halaman single post */
Route::get('posts/{slug}', function ($slug) {
    return view('post', [
        "title" => "Single Post",
    ]);
});
