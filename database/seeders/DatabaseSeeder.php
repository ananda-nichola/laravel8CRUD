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
             'name' => 'Ananda Nichola',
             'username' => 'nicochanLV999',
             'email' => 'anandanichola@gmail.com',
             'password' => bcrypt('password')
         ]);

        //  User::create([
        //     'name' => 'Wahyu Wahyudi',
        //     'email' => 'wahyu@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        User::factory(3)->create();

         Category::create([
             'name' => 'Web Progamming',
             'slug' => 'web-progamming'
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

        //  Post::create([
        //      'title' => 'Judul Pertama',
        //      'slug' => 'judul-pertama',
        //      'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat non exercitationem hic unde quisquam ex labore nostrum consectetur error minus?',
        //      'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus quidem architecto fugiat, eius dolorum dolorem ad facilis cumque laboriosam quia! Ex facere excepturi ipsa debitis maiores enim magnam error voluptates culpa. Aspernatur dolore id sapiente enim ex incidunt provident, explicabo voluptatibus dolorum sunt maiores, blanditiis fugit optio beatae doloremque deleniti facilis, necessitatibus aliquid voluptas earum in. Perferendis quod doloribus mollitia dolore aut perspiciatis provident sit itaque. Doloribus in, officiis commodi magnam ipsam ratione ipsum dolore quidem labore eveniet rerum error sapiente iste eos! Ratione iusto neque vel deserunt vitae, incidunt aspernatur ad adipisci sed nesciunt ex id, culpa fugiat consectetur!',
        //      'category_id' => 1,
        //      'user_id' => 1
        //  ]);

        //  Post::create([
        //      'title' => 'Judul Kedua',
        //      'slug' => 'judul-kedua',
        //      'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat non exercitationem hic unde quisquam ex labore nostrum consectetur error minus?',
        //      'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus quidem architecto fugiat, eius dolorum dolorem ad facilis cumque laboriosam quia! Ex facere excepturi ipsa debitis maiores enim magnam error voluptates culpa. Aspernatur dolore id sapiente enim ex incidunt provident, explicabo voluptatibus dolorum sunt maiores, blanditiis fugit optio beatae doloremque deleniti facilis, necessitatibus aliquid voluptas earum in. Perferendis quod doloribus mollitia dolore aut perspiciatis provident sit itaque. Doloribus in, officiis commodi magnam ipsam ratione ipsum dolore quidem labore eveniet rerum error sapiente iste eos! Ratione iusto neque vel deserunt vitae, incidunt aspernatur ad adipisci sed nesciunt ex id, culpa fugiat consectetur!',
        //      'category_id' => 1,
        //      'user_id' => 1
        //  ]);

        //  Post::create([
        //      'title' => 'Judul Ketiga',
        //      'slug' => 'judul-ketiga',
        //      'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat non exercitationem hic unde quisquam ex labore nostrum consectetur error minus?',
        //      'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus quidem architecto fugiat, eius dolorum dolorem ad facilis cumque laboriosam quia! Ex facere excepturi ipsa debitis maiores enim magnam error voluptates culpa. Aspernatur dolore id sapiente enim ex incidunt provident, explicabo voluptatibus dolorum sunt maiores, blanditiis fugit optio beatae doloremque deleniti facilis, necessitatibus aliquid voluptas earum in. Perferendis quod doloribus mollitia dolore aut perspiciatis provident sit itaque. Doloribus in, officiis commodi magnam ipsam ratione ipsum dolore quidem labore eveniet rerum error sapiente iste eos! Ratione iusto neque vel deserunt vitae, incidunt aspernatur ad adipisci sed nesciunt ex id, culpa fugiat consectetur!',
        //      'category_id' => 2,
        //      'user_id' => 1
        //  ]);

        //  Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat non exercitationem hic unde quisquam ex labore nostrum consectetur error minus?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus quidem architecto fugiat, eius dolorum dolorem ad facilis cumque laboriosam quia! Ex facere excepturi ipsa debitis maiores enim magnam error voluptates culpa. Aspernatur dolore id sapiente enim ex incidunt provident, explicabo voluptatibus dolorum sunt maiores, blanditiis fugit optio beatae doloremque deleniti facilis, necessitatibus aliquid voluptas earum in. Perferendis quod doloribus mollitia dolore aut perspiciatis provident sit itaque. Doloribus in, officiis commodi magnam ipsam ratione ipsum dolore quidem labore eveniet rerum error sapiente iste eos! Ratione iusto neque vel deserunt vitae, incidunt aspernatur ad adipisci sed nesciunt ex id, culpa fugiat consectetur!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

