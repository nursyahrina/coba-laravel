<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::factory(3)->create();
        // User::create([
        //     'name' => 'Nursyahrina',
        //     'email' => 'nursyahrina17@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'Hyoorin Lee',
        //     'email' => 'lhyoorin@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        Category::create([
            'name' => 'Data',
            'slug' => 'data'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Artificial Intelligences',
            'slug' => 'artificial-intelligences'
        ]);

        Category::create([
            'name' => 'Computer Networks',
            'slug' => 'computer-networks'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem harum optio adipisci, repellat vero praesentium laborum assumenda voluptatum molestiae minima error beatae veniam doloribus eum quisquam officiis rerum expedita quis deleniti voluptatibus?',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem harum optio adipisci, repellat vero praesentium laborum assumenda voluptatum molestiae minima error beatae veniam doloribus eum quisquam officiis rerum expedita quis deleniti voluptatibus? Cupiditate dolorum id commodi ad atque, laboriosam velit minus quam voluptas? Nam officia impedit accusamus iusto reprehenderit quam!</p><p>Dolorem possimus quasi asperiores culpa ducimus similique consectetur velit odit alias atque officia excepturi ratione aspernatur error deserunt, sapiente maxime tempore aut illum quae corporis eligendi et exercitationem dolor? Ratione hic amet optio voluptatem voluptatibus velit ex inventore sequi dolorem. Illum ut quisquam excepturi corporis, ducimus molestias fuga perspiciatis laudantium doloremque magnam enim quibusdam voluptas tempora ipsum, voluptatem perferendis libero esse totam dolorem sequi nobis. Recusandae voluptatem fugiat molestias aperiam architecto, ab, dignissimos at maiores molestiae totam libero non atque ducimus numquam debitis iusto. Sed ab praesentium velit, placeat aliquam quibusdam sit, officia, cupiditate distinctio sint itaque nobis! Vero dolore dolorum tenetur sint accusantium eos ipsum itaque modi quae, debitis dicta, a, vel perspiciatis. Distinctio sequi saepe perferendis sed asperiores necessitatibus ea non? Corrupti officiis tenetur ut numquam ea soluta inventore totam esse culpa. Aperiam aut non illum molestiae velit, voluptas tempore sunt consequuntur, incidunt a magni commodi ipsum quae.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Totam error architecto natus aperiam! Ducimus excepturi accusantium voluptas ullam nostrum in eaque aliquid, deserunt, animi repellendus pariatur id vitae itaque sapiente distinctio quisquam esse saepe asperiores! Obcaecati aliquid amet voluptatum ipsum aut omnis, eum delectus commodi a illo quasi blanditiis adipisci perspiciatis nisi alias aliquam animi quisquam doloremque!',
        //     'body' => '<p>Totam error architecto natus aperiam! Ducimus excepturi accusantium voluptas ullam nostrum in eaque aliquid, deserunt, animi repellendus pariatur id vitae itaque sapiente distinctio quisquam esse saepe asperiores! Obcaecati aliquid amet voluptatum ipsum aut omnis, eum delectus commodi a illo quasi blanditiis adipisci perspiciatis nisi alias aliquam animi quisquam doloremque! Error pariatur sed illum rerum ab? Commodi eveniet rerum nemo, quam ipsam veniam, sint dolores impedit earum, consectetur porro veritatis vitae culpa quod iusto! Autem qui at sed provident ea quo, ratione officiis adipisci! Quod sequi quo dolor molestias dolore.</p><p>Numquam sed temporibus itaque soluta, sint veniam veritatis dolorem maiores maxime! Sint perferendis numquam necessitatibus quam maxime cum nulla ullam, neque cumque totam incidunt non placeat, illum ab inventore. Enim voluptatum eos nihil similique tempora corrupti reprehenderit consectetur! Optio qui, cum quibusdam sed alias harum, repudiandae eaque fugit recusandae deleniti culpa nulla. Voluptate vel non dolores alias voluptatem consectetur eaque reprehenderit pariatur, illum quaerat obcaecati a! Officia recusandae consequuntur laborum voluptatem adipisci, iste aliquid amet itaque dicta voluptatum harum, ducimus hic et tenetur qui autem illo iusto! Voluptatem iste reiciendis quibusdam. Magni nulla ut fugiat magnam, quibusdam, doloribus cupiditate adipisci blanditiis architecto modi consectetur quia tenetur dolorum excepturi aliquid quidem vitae debitis soluta! Quae, a dicta quis et accusantium facilis.</p><p>Exercitationem eligendi et debitis ipsa porro necessitatibus quia quam eos. Cupiditate veniam dolorem, voluptatem libero tempora aliquid fugiat tempore quis, quibusdam similique dolores nesciunt! Explicabo et minima tempora porro molestias soluta earum consequuntur accusamus quidem, dolor recusandae. Delectus ipsum fugit fuga architecto eos mollitia, ducimus molestias porro esse voluptate ipsam placeat maxime voluptatem provident harum ipsa eveniet vitae velit odio totam voluptatum similique atque. Recusandae nihil porro inventore rerum, ut totam pariatur eius voluptate a fuga nisi veniam quam cum labore provident quisquam molestias sunt voluptas adipisci quis repudiandae. Eius consectetur impedit eligendi repudiandae! Ipsa sunt, eveniet corrupti ducimus voluptatem laboriosam quasi natus iure.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 4,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem harum optio adipisci, repellat vero praesentium laborum assumenda voluptatum molestiae minima error beatae veniam doloribus eum quisquam officiis rerum expedita quis deleniti voluptatibus?',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem harum optio adipisci, repellat vero praesentium laborum assumenda voluptatum molestiae minima error beatae veniam doloribus eum quisquam officiis rerum expedita quis deleniti voluptatibus? Cupiditate dolorum id commodi ad atque, laboriosam velit minus quam voluptas? Nam officia impedit accusamus iusto reprehenderit quam!</p><p>Dolorem possimus quasi asperiores culpa ducimus similique consectetur velit odit alias atque officia excepturi ratione aspernatur error deserunt, sapiente maxime tempore aut illum quae corporis eligendi et exercitationem dolor? Ratione hic amet optio voluptatem voluptatibus velit ex inventore sequi dolorem. Illum ut quisquam excepturi corporis, ducimus molestias fuga perspiciatis laudantium doloremque magnam enim quibusdam voluptas tempora ipsum, voluptatem perferendis libero esse totam dolorem sequi nobis. Recusandae voluptatem fugiat molestias aperiam architecto, ab, dignissimos at maiores molestiae totam libero non atque ducimus numquam debitis iusto. Sed ab praesentium velit, placeat aliquam quibusdam sit, officia, cupiditate distinctio sint itaque nobis! Vero dolore dolorum tenetur sint accusantium eos ipsum itaque modi quae, debitis dicta, a, vel perspiciatis. Distinctio sequi saepe perferendis sed asperiores necessitatibus ea non? Corrupti officiis tenetur ut numquam ea soluta inventore totam esse culpa. Aperiam aut non illum molestiae velit, voluptas tempore sunt consequuntur, incidunt a magni commodi ipsum quae.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'category_id' => 5,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Totam error architecto natus aperiam! Ducimus excepturi accusantium voluptas ullam nostrum in eaque aliquid, deserunt, animi repellendus pariatur id vitae itaque sapiente distinctio quisquam esse saepe asperiores! Obcaecati aliquid amet voluptatum ipsum aut omnis, eum delectus commodi a illo quasi blanditiis adipisci perspiciatis nisi alias aliquam animi quisquam doloremque!',
        //     'body' => '<p>Totam error architecto natus aperiam! Ducimus excepturi accusantium voluptas ullam nostrum in eaque aliquid, deserunt, animi repellendus pariatur id vitae itaque sapiente distinctio quisquam esse saepe asperiores! Obcaecati aliquid amet voluptatum ipsum aut omnis, eum delectus commodi a illo quasi blanditiis adipisci perspiciatis nisi alias aliquam animi quisquam doloremque! Error pariatur sed illum rerum ab? Commodi eveniet rerum nemo, quam ipsam veniam, sint dolores impedit earum, consectetur porro veritatis vitae culpa quod iusto! Autem qui at sed provident ea quo, ratione officiis adipisci! Quod sequi quo dolor molestias dolore.</p><p>Numquam sed temporibus itaque soluta, sint veniam veritatis dolorem maiores maxime! Sint perferendis numquam necessitatibus quam maxime cum nulla ullam, neque cumque totam incidunt non placeat, illum ab inventore. Enim voluptatum eos nihil similique tempora corrupti reprehenderit consectetur! Optio qui, cum quibusdam sed alias harum, repudiandae eaque fugit recusandae deleniti culpa nulla. Voluptate vel non dolores alias voluptatem consectetur eaque reprehenderit pariatur, illum quaerat obcaecati a! Officia recusandae consequuntur laborum voluptatem adipisci, iste aliquid amet itaque dicta voluptatum harum, ducimus hic et tenetur qui autem illo iusto! Voluptatem iste reiciendis quibusdam. Magni nulla ut fugiat magnam, quibusdam, doloribus cupiditate adipisci blanditiis architecto modi consectetur quia tenetur dolorum excepturi aliquid quidem vitae debitis soluta! Quae, a dicta quis et accusantium facilis.</p><p>Exercitationem eligendi et debitis ipsa porro necessitatibus quia quam eos. Cupiditate veniam dolorem, voluptatem libero tempora aliquid fugiat tempore quis, quibusdam similique dolores nesciunt! Explicabo et minima tempora porro molestias soluta earum consequuntur accusamus quidem, dolor recusandae. Delectus ipsum fugit fuga architecto eos mollitia, ducimus molestias porro esse voluptate ipsam placeat maxime voluptatem provident harum ipsa eveniet vitae velit odio totam voluptatum similique atque. Recusandae nihil porro inventore rerum, ut totam pariatur eius voluptate a fuga nisi veniam quam cum labore provident quisquam molestias sunt voluptas adipisci quis repudiandae. Eius consectetur impedit eligendi repudiandae! Ipsa sunt, eveniet corrupti ducimus voluptatem laboriosam quasi natus iure.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Lima',
        //     'category_id' => 5,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-lima',
        //     'excerpt' => 'Totam error architecto natus aperiam! Ducimus excepturi accusantium voluptas ullam nostrum in eaque aliquid, deserunt, animi repellendus pariatur id vitae itaque sapiente distinctio quisquam esse saepe asperiores! Obcaecati aliquid amet voluptatum ipsum aut omnis, eum delectus commodi a illo quasi blanditiis adipisci perspiciatis nisi alias aliquam animi quisquam doloremque!',
        //     'body' => '<p>Totam error architecto natus aperiam! Ducimus excepturi accusantium voluptas ullam nostrum in eaque aliquid, deserunt, animi repellendus pariatur id vitae itaque sapiente distinctio quisquam esse saepe asperiores! Obcaecati aliquid amet voluptatum ipsum aut omnis, eum delectus commodi a illo quasi blanditiis adipisci perspiciatis nisi alias aliquam animi quisquam doloremque! Error pariatur sed illum rerum ab? Commodi eveniet rerum nemo, quam ipsam veniam, sint dolores impedit earum, consectetur porro veritatis vitae culpa quod iusto! Autem qui at sed provident ea quo, ratione officiis adipisci! Quod sequi quo dolor molestias dolore.</p><p>Numquam sed temporibus itaque soluta, sint veniam veritatis dolorem maiores maxime! Sint perferendis numquam necessitatibus quam maxime cum nulla ullam, neque cumque totam incidunt non placeat, illum ab inventore. Enim voluptatum eos nihil similique tempora corrupti reprehenderit consectetur! Optio qui, cum quibusdam sed alias harum, repudiandae eaque fugit recusandae deleniti culpa nulla. Voluptate vel non dolores alias voluptatem consectetur eaque reprehenderit pariatur, illum quaerat obcaecati a! Officia recusandae consequuntur laborum voluptatem adipisci, iste aliquid amet itaque dicta voluptatum harum, ducimus hic et tenetur qui autem illo iusto! Voluptatem iste reiciendis quibusdam. Magni nulla ut fugiat magnam, quibusdam, doloribus cupiditate adipisci blanditiis architecto modi consectetur quia tenetur dolorum excepturi aliquid quidem vitae debitis soluta! Quae, a dicta quis et accusantium facilis.</p><p>Exercitationem eligendi et debitis ipsa porro necessitatibus quia quam eos. Cupiditate veniam dolorem, voluptatem libero tempora aliquid fugiat tempore quis, quibusdam similique dolores nesciunt! Explicabo et minima tempora porro molestias soluta earum consequuntur accusamus quidem, dolor recusandae. Delectus ipsum fugit fuga architecto eos mollitia, ducimus molestias porro esse voluptate ipsam placeat maxime voluptatem provident harum ipsa eveniet vitae velit odio totam voluptatum similique atque. Recusandae nihil porro inventore rerum, ut totam pariatur eius voluptate a fuga nisi veniam quam cum labore provident quisquam molestias sunt voluptas adipisci quis repudiandae. Eius consectetur impedit eligendi repudiandae! Ipsa sunt, eveniet corrupti ducimus voluptatem laboriosam quasi natus iure.</p>'
        // ]);
    }
}
