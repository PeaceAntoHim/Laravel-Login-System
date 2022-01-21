<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /*   User::create([
            'name' => 'Frans Sebastian',
            'email' => 'stefanusfranssebastian@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Abi Manyun',
            'email' => 'abimanyub@gmail.com',
            'password' => bcrypt('123456')
        ]); */

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();



        /* 
        Post::create([
            'title' => 'First title',
            'slug' => 'first-title',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati laborum ratione non commodi amet quam eaque',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati laborum ratione non commodi amet quam eaque corporis hic excepturi ipsa magnam cupiditate ad perferendis nostrum architecto labore enim magni, iste atque numquam eveniet vel, tempora iusto voluptates? Laudantium, tempora. Nam blanditiis praesentium qui, quod possimus, temporibus doloremque voluptatibus voluptas vero in quam facere maiores! Delectus, quidem eum tenetur facilis nisi quo commodi, corporis sint qui autem suscipit, consequatur neque mollitia deleniti temporibus consequuntur eveniet? Optio cumque quam ducimus minus consequuntur vero, perferendis molestias corrupti corporis perspiciatis veniam, quasi aut officia dolore. Unde velit ab quod eos est iste ducimus eum, fugiat cupiditate pariatur atque amet tempora laboriosam, ratione similique temporibus adipisci quos, ad consequuntur fuga officia ipsum maxime dolorem sapiente. Cupiditate ducimus illo temporibus commodi dolorum consequuntur officia molestiae, minima ex esse in facere aperiam sit pariatur reprehenderit, distinctio consectetur alias sequi aspernatur sapiente nulla minus veritatis! Adipisci, necessitatibus facere?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Second title',
            'slug' => 'second-title',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati laborum ratione non commodi amet quam eaque',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati laborum ratione non commodi amet quam eaque corporis hic excepturi ipsa magnam cupiditate ad perferendis nostrum architecto labore enim magni, iste atque numquam eveniet vel, tempora iusto voluptates? Laudantium, tempora. Nam blanditiis praesentium qui, quod possimus, temporibus doloremque voluptatibus voluptas vero in quam facere maiores! Delectus, quidem eum tenetur facilis nisi quo commodi, corporis sint qui autem suscipit, consequatur neque mollitia deleniti temporibus consequuntur eveniet? Optio cumque quam ducimus minus consequuntur vero, perferendis molestias corrupti corporis perspiciatis veniam, quasi aut officia dolore. Unde velit ab quod eos est iste ducimus eum, fugiat cupiditate pariatur atque amet tempora laboriosam, ratione similique temporibus adipisci quos, ad consequuntur fuga officia ipsum maxime dolorem sapiente. Cupiditate ducimus illo temporibus commodi dolorum consequuntur officia molestiae, minima ex esse in facere aperiam sit pariatur reprehenderit, distinctio consectetur alias sequi aspernatur sapiente nulla minus veritatis! Adipisci, necessitatibus facere?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Third title',
            'slug' => 'third-title',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati laborum ratione non commodi amet quam eaque',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati laborum ratione non commodi amet quam eaque corporis hic excepturi ipsa magnam cupiditate ad perferendis nostrum architecto labore enim magni, iste atque numquam eveniet vel, tempora iusto voluptates? Laudantium, tempora. Nam blanditiis praesentium qui, quod possimus, temporibus doloremque voluptatibus voluptas vero in quam facere maiores! Delectus, quidem eum tenetur facilis nisi quo commodi, corporis sint qui autem suscipit, consequatur neque mollitia deleniti temporibus consequuntur eveniet? Optio cumque quam ducimus minus consequuntur vero, perferendis molestias corrupti corporis perspiciatis veniam, quasi aut officia dolore. Unde velit ab quod eos est iste ducimus eum, fugiat cupiditate pariatur atque amet tempora laboriosam, ratione similique temporibus adipisci quos, ad consequuntur fuga officia ipsum maxime dolorem sapiente. Cupiditate ducimus illo temporibus commodi dolorum consequuntur officia molestiae, minima ex esse in facere aperiam sit pariatur reprehenderit, distinctio consectetur alias sequi aspernatur sapiente nulla minus veritatis! Adipisci, necessitatibus facere?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Fourth title',
            'slug' => 'fourth-title',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati laborum ratione non commodi amet quam eaque',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati laborum ratione non commodi amet quam eaque corporis hic excepturi ipsa magnam cupiditate ad perferendis nostrum architecto labore enim magni, iste atque numquam eveniet vel, tempora iusto voluptates? Laudantium, tempora. Nam blanditiis praesentium qui, quod possimus, temporibus doloremque voluptatibus voluptas vero in quam facere maiores! Delectus, quidem eum tenetur facilis nisi quo commodi, corporis sint qui autem suscipit, consequatur neque mollitia deleniti temporibus consequuntur eveniet? Optio cumque quam ducimus minus consequuntur vero, perferendis molestias corrupti corporis perspiciatis veniam, quasi aut officia dolore. Unde velit ab quod eos est iste ducimus eum, fugiat cupiditate pariatur atque amet tempora laboriosam, ratione similique temporibus adipisci quos, ad consequuntur fuga officia ipsum maxime dolorem sapiente. Cupiditate ducimus illo temporibus commodi dolorum consequuntur officia molestiae, minima ex esse in facere aperiam sit pariatur reprehenderit, distinctio consectetur alias sequi aspernatur sapiente nulla minus veritatis! Adipisci, necessitatibus facere?',
            'category_id' => 2,
            'user_id' => 2
        ]); */
    }
}
