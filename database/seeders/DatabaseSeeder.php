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
        

        // User::create([
        //     'name' => 'Dea Abeliya',
        //     'email' => 'deaabeliya@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Gilang',
        //     'email' => 'gilang@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

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

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, inventore.',
        //     'body' => 'orem, ipsum dolor sit amet consectetur adipisicing elit. Error, dolore iste! Impedit ut quaerat voluptatem soluta porro sint fuga similique sunt natus at illum incidunt, voluptate iusto! Velit exercitationem, omnis ipsam qui ipsa vero tempore esse laborum fugiat non voluptatum quae animi autem cumque inventore aliquam. Pariatur possimus nisi iste, quos saepe sed veniam itaque quia beatae distinctio, a aliquam similique dicta ea asperiores at vitae est blanditiis. Labore, aperiam eum impedit dolorem quasi provident officia corrupti. A vitae ipsa quos iure, optio, tempora fuga, sit facere laborum dolore porro quasi commodi perferendis incidunt eveniet! Officiis autem tempore saepe neque.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, inventore.',
        //     'body' => 'orem, ipsum dolor sit amet consectetur adipisicing elit. Error, dolore iste! Impedit ut quaerat voluptatem soluta porro sint fuga similique sunt natus at illum incidunt, voluptate iusto! Velit exercitationem, omnis ipsam qui ipsa vero tempore esse laborum fugiat non voluptatum quae animi autem cumque inventore aliquam. Pariatur possimus nisi iste, quos saepe sed veniam itaque quia beatae distinctio, a aliquam similique dicta ea asperiores at vitae est blanditiis. Labore, aperiam eum impedit dolorem quasi provident officia corrupti. A vitae ipsa quos iure, optio, tempora fuga, sit facere laborum dolore porro quasi commodi perferendis incidunt eveniet! Officiis autem tempore saepe neque.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, inventore.',
        //     'body' => 'orem, ipsum dolor sit amet consectetur adipisicing elit. Error, dolore iste! Impedit ut quaerat voluptatem soluta porro sint fuga similique sunt natus at illum incidunt, voluptate iusto! Velit exercitationem, omnis ipsam qui ipsa vero tempore esse laborum fugiat non voluptatum quae animi autem cumque inventore aliquam. Pariatur possimus nisi iste, quos saepe sed veniam itaque quia beatae distinctio, a aliquam similique dicta ea asperiores at vitae est blanditiis. Labore, aperiam eum impedit dolorem quasi provident officia corrupti. A vitae ipsa quos iure, optio, tempora fuga, sit facere laborum dolore porro quasi commodi perferendis incidunt eveniet! Officiis autem tempore saepe neque.',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, inventore.',
        //     'body' => 'orem, ipsum dolor sit amet consectetur adipisicing elit. Error, dolore iste! Impedit ut quaerat voluptatem soluta porro sint fuga similique sunt natus at illum incidunt, voluptate iusto! Velit exercitationem, omnis ipsam qui ipsa vero tempore esse laborum fugiat non voluptatum quae animi autem cumque inventore aliquam. Pariatur possimus nisi iste, quos saepe sed veniam itaque quia beatae distinctio, a aliquam similique dicta ea asperiores at vitae est blanditiis. Labore, aperiam eum impedit dolorem quasi provident officia corrupti. A vitae ipsa quos iure, optio, tempora fuga, sit facere laborum dolore porro quasi commodi perferendis incidunt eveniet! Officiis autem tempore saepe neque.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);

    }
}
