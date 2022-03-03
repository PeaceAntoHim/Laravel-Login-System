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

        User::create([
            'name' => 'Frans Sebastian',
            'username' => 'Frannonym_Code',
            'email' => 'stefanusfranssebastian@gmail.com',
            'password' => bcrypt('123456')
        ]);

        // User::create([
        //     'name' => 'Abi Manyun',
        //     'email' => 'abimanyub@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        User::factory(3)->create();

        // post from 1 - 20
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science'
        ]);

        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial-intelligence'
        ]);

        Category::create([
            'name' => 'Blockchain',
            'slug' => 'blockchain'
        ]);

        Category::create([
            'name' => 'Mathematics',
            'slug' => 'mathematics'
        ]);

        Category::create([
            'name' => 'Mobile Developer',
            'slug' => 'mobile-developer'
        ]);

        Category::create([
            'name' => 'Cloud Computing',
            'slug' => 'cloud-computing'
        ]);
        
        Category::create([
            'name' => 'Art',
            'slug' => 'art'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Category::create([
            'name' => 'Movie',
            'slug' => 'movie'
        ]);

        Category::create([
            'name' => 'Music',
            'slug' => 'music'
        ]);

        Category::create([
            'name' => 'Cartoon',
            'slug' => 'cartoon'
        ]);

        Category::create([
            'name' => 'Food',
            'slug' => 'food'
        ]);

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);

        Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion'
        ]);

        Category::create([
            'name' => 'Photography',
            'slug' => 'photography'
        ]);

        Category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);

        Category::create([
            'name' => 'Health',
            'slug' => 'health'
        ]);

        // post from 21 to 30
        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);

        Category::create([
            'name' => 'Marketing',
            'slug' => 'marketing'
        ]);

        Category::create([
            'name' => 'Business',
            'slug' => 'business'
        ]);

        Category::create([
            'name' => 'Finance',
            'slug' => 'finance'
        ]);

        Category::create([
            'name' => 'Law',
            'slug' => 'law'
        ]);

        Category::create([
            'name' => 'Engineering',
            'slug' => 'engineering'
        ]);

        Category::create([
            'name' => 'Education',
            'slug' => 'education'
        ]);

        Category::create([
            'name' => 'Drama Korean',
            'slug' => 'drama-korean'
        ]);

        Category::create([
            'name' => 'Hollywood',
            'slug' => 'hollywood'
        ]);
        
        Category::create([
            'name' => 'Anime',
            'slug' => 'anime'
        ]);

        Post::factory(60)->create();



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
