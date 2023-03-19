<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat Data User menggunakan Factory & Faker

        // Buat 1 data user
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Bryan Sie',
            'username' => 'bryan',
            'email' => 'bryan@test.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        // User::create([
        //     'name' => 'Robert',
        //     'email' => 'robert@example.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Post 1',
        //     'slug' => 'judul-post-1',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga tempora consectetur voluptates ex explicabo earum voluptatem adipisci consequuntur esse rerum,',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga tempora consectetur voluptates ex explicabo earum voluptatem adipisci consequuntur esse rerum, consequatur voluptate neque est, repellat saepe, dolor maiores corporis expedita velit quasi aliquam. At, porro? Facere, nisi.</p> <p>Iste provident maiores mollitia asperiores ullam recusandae enim ab ipsum ratione amet, voluptas nostrum distinctio numquam perferendis voluptates quos facilis sed veritatis architecto doloribus eius, dolorem nam obcaecati quo? Eveniet corporis nam perferendis, nobis eum mollitia tempora unde excepturi facilis totam.</p> <p>Commodi velit recusandae est assumenda corrupti sunt, laborum, culpa fugiat totam eveniet ipsa hic dolor nam eaque nostrum, inventore neque excepturi ducimus ipsam earum maxime magni incidunt.</p> Quidem dignissimos nemo quas corrupti perspiciatis dicta aperiam amet laborum inventore eveniet veniam, ducimus soluta? Porro consequatur quod repellat corrupti dolor eligendi, accusamus assumenda sequi vitae odit ab ipsa debitis voluptates, earum vero! Necessitatibus saepe dicta, quibusdam consequuntur aut fuga nulla perferendis sed ipsum molestias!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Post 2',
        //     'slug' => 'judul-post-2',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga tempora consectetur voluptates ex explicabo earum voluptatem adipisci consequuntur esse rerum,',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga tempora consectetur voluptates ex explicabo earum voluptatem adipisci consequuntur esse rerum, consequatur voluptate neque est, repellat saepe, dolor maiores corporis expedita velit quasi aliquam. At, porro? Facere, nisi.</p> <p>Iste provident maiores mollitia asperiores ullam recusandae enim ab ipsum ratione amet, voluptas nostrum distinctio numquam perferendis voluptates quos facilis sed veritatis architecto doloribus eius, dolorem nam obcaecati quo? Eveniet corporis nam perferendis, nobis eum mollitia tempora unde excepturi facilis totam.</p> <p>Commodi velit recusandae est assumenda corrupti sunt, laborum, culpa fugiat totam eveniet ipsa hic dolor nam eaque nostrum, inventore neque excepturi ducimus ipsam earum maxime magni incidunt.</p> Quidem dignissimos nemo quas corrupti perspiciatis dicta aperiam amet laborum inventore eveniet veniam, ducimus soluta? Porro consequatur quod repellat corrupti dolor eligendi, accusamus assumenda sequi vitae odit ab ipsa debitis voluptates, earum vero! Necessitatibus saepe dicta, quibusdam consequuntur aut fuga nulla perferendis sed ipsum molestias!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Post 3',
        //     'slug' => 'judul-post-3',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga tempora consectetur voluptates ex explicabo earum voluptatem adipisci consequuntur esse rerum,',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga tempora consectetur voluptates ex explicabo earum voluptatem adipisci consequuntur esse rerum, consequatur voluptate neque est, repellat saepe, dolor maiores corporis expedita velit quasi aliquam. At, porro? Facere, nisi.</p> <p>Iste provident maiores mollitia asperiores ullam recusandae enim ab ipsum ratione amet, voluptas nostrum distinctio numquam perferendis voluptates quos facilis sed veritatis architecto doloribus eius, dolorem nam obcaecati quo? Eveniet corporis nam perferendis, nobis eum mollitia tempora unde excepturi facilis totam.</p> <p>Commodi velit recusandae est assumenda corrupti sunt, laborum, culpa fugiat totam eveniet ipsa hic dolor nam eaque nostrum, inventore neque excepturi ducimus ipsam earum maxime magni incidunt.</p> Quidem dignissimos nemo quas corrupti perspiciatis dicta aperiam amet laborum inventore eveniet veniam, ducimus soluta? Porro consequatur quod repellat corrupti dolor eligendi, accusamus assumenda sequi vitae odit ab ipsa debitis voluptates, earum vero! Necessitatibus saepe dicta, quibusdam consequuntur aut fuga nulla perferendis sed ipsum molestias!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Post 4',
        //     'slug' => 'judul-post-4',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga tempora consectetur voluptates ex explicabo earum voluptatem adipisci consequuntur esse rerum,',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga tempora consectetur voluptates ex explicabo earum voluptatem adipisci consequuntur esse rerum, consequatur voluptate neque est, repellat saepe, dolor maiores corporis expedita velit quasi aliquam. At, porro? Facere, nisi.</p> <p>Iste provident maiores mollitia asperiores ullam recusandae enim ab ipsum ratione amet, voluptas nostrum distinctio numquam perferendis voluptates quos facilis sed veritatis architecto doloribus eius, dolorem nam obcaecati quo? Eveniet corporis nam perferendis, nobis eum mollitia tempora unde excepturi facilis totam.</p> <p>Commodi velit recusandae est assumenda corrupti sunt, laborum, culpa fugiat totam eveniet ipsa hic dolor nam eaque nostrum, inventore neque excepturi ducimus ipsam earum maxime magni incidunt.</p> Quidem dignissimos nemo quas corrupti perspiciatis dicta aperiam amet laborum inventore eveniet veniam, ducimus soluta? Porro consequatur quod repellat corrupti dolor eligendi, accusamus assumenda sequi vitae odit ab ipsa debitis voluptates, earum vero! Necessitatibus saepe dicta, quibusdam consequuntur aut fuga nulla perferendis sed ipsum molestias!</p>'
        // ]);
    }
}
