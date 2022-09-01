<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Rifal Kurniawan',
            'username' => 'falkur',
            'email' => 'rifalkurniawan21@gmail.com',
            'password' => bcrypt('falkur21')
        ]);

        // User::create([
        //     'name' => 'Maryam Nur Ailah',
        //     'email' => 'maryam21@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere magnam, enim quisquam veniam optio obcaecati architecto autem reiciendis explicabo? Voluptatum, eveniet itaque nostrum atque obcaecati iste. Illo pariatur consequatur, dolorem nisi nemo porro! Aliquid nihil asperiores officia deserunt cumque eum eveniet nemo esse assumenda aut nobis, similique dolore autem at?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet alias ut inventore fugiat voluptate! In dolore nemo neque unde eligendi, suscipit error tempore asperiores commodi optio reprehenderit quod, praesentium molestiae laudantium minus? Deserunt ea officiis placeat cupiditate rerum tempore praesentium aliquam quidem? Sapiente deserunt esse laudantium, voluptas ratione laborum eveniet.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam quod eos dicta incidunt architecto ducimus dolor odio dolorem accusantium, nemo est ratione molestiae? Sit accusamus magnam praesentium maxime nihil, officiis officia cumque quo quam dolorum, veritatis error commodi possimus, modi provident. Animi pariatur soluta at maiores dolorem, sapiente perspiciatis dolore.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere magnam, enim quisquam veniam optio obcaecati architecto autem reiciendis explicabo? Voluptatum, eveniet itaque nostrum atque obcaecati iste. Illo pariatur consequatur, dolorem nisi nemo porro! Aliquid nihil asperiores officia deserunt cumque eum eveniet nemo esse assumenda aut nobis, similique dolore autem at?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet alias ut inventore fugiat voluptate! In dolore nemo neque unde eligendi, suscipit error tempore asperiores commodi optio reprehenderit quod, praesentium molestiae laudantium minus? Deserunt ea officiis placeat cupiditate rerum tempore praesentium aliquam quidem? Sapiente deserunt esse laudantium, voluptas ratione laborum eveniet.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam quod eos dicta incidunt architecto ducimus dolor odio dolorem accusantium, nemo est ratione molestiae? Sit accusamus magnam praesentium maxime nihil, officiis officia cumque quo quam dolorum, veritatis error commodi possimus, modi provident. Animi pariatur soluta at maiores dolorem, sapiente perspiciatis dolore.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere magnam, enim quisquam veniam optio obcaecati architecto autem reiciendis explicabo? Voluptatum, eveniet itaque nostrum atque obcaecati iste. Illo pariatur consequatur, dolorem nisi nemo porro! Aliquid nihil asperiores officia deserunt cumque eum eveniet nemo esse assumenda aut nobis, similique dolore autem at?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet alias ut inventore fugiat voluptate! In dolore nemo neque unde eligendi, suscipit error tempore asperiores commodi optio reprehenderit quod, praesentium molestiae laudantium minus? Deserunt ea officiis placeat cupiditate rerum tempore praesentium aliquam quidem? Sapiente deserunt esse laudantium, voluptas ratione laborum eveniet.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam quod eos dicta incidunt architecto ducimus dolor odio dolorem accusantium, nemo est ratione molestiae? Sit accusamus magnam praesentium maxime nihil, officiis officia cumque quo quam dolorum, veritatis error commodi possimus, modi provident. Animi pariatur soluta at maiores dolorem, sapiente perspiciatis dolore.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere magnam, enim quisquam veniam optio obcaecati architecto autem reiciendis explicabo? Voluptatum, eveniet itaque nostrum atque obcaecati iste. Illo pariatur consequatur, dolorem nisi nemo porro! Aliquid nihil asperiores officia deserunt cumque eum eveniet nemo esse assumenda aut nobis, similique dolore autem at?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet alias ut inventore fugiat voluptate! In dolore nemo neque unde eligendi, suscipit error tempore asperiores commodi optio reprehenderit quod, praesentium molestiae laudantium minus? Deserunt ea officiis placeat cupiditate rerum tempore praesentium aliquam quidem? Sapiente deserunt esse laudantium, voluptas ratione laborum eveniet.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam quod eos dicta incidunt architecto ducimus dolor odio dolorem accusantium, nemo est ratione molestiae? Sit accusamus magnam praesentium maxime nihil, officiis officia cumque quo quam dolorum, veritatis error commodi possimus, modi provident. Animi pariatur soluta at maiores dolorem, sapiente perspiciatis dolore.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
