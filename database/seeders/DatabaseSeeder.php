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
            'name' => 'Heru Setiawan',
            'username' => 'heru27',
            'email' => 'heru27setia@gmail.com',
            'password' => bcrypt('qwerty')
        ]);
        User::create([
            'name' => 'Martis',
            'username' => 'martis27',
            'email' => 'martis@gmail.com',
            'password' => bcrypt('martis')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Film',
            'slug' => 'film'
        ]);
        Category::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet,',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, labore quibusdam aliquid distinctio tempora asperiores, atque in cupiditate quam, velit cumque. Nesciunt facere harum ipsam optio quibusdam possimus quae dolorem sint cupiditate natus unde nemo, cumque debitis eum assumenda cum reprehenderit mollitia dolore ullam deleniti vel! Cupiditate facere corporis totam asperiores id ducimus magni pariatur illo quidem itaque, laudantium ea error sint autem, quos rerum exercitationem! Non, qui.</p> <p>Consequuntur quasi fugiat soluta non accusamus aspernatur dolore laboriosam repellat voluptas quos perferendis, tempore in deleniti amet vel deserunt, tenetur vero veritatis eaque dolorum magni! Aliquid totam nostrum quos dignissimos officiis perferendis, sed temporibus modi fugit, distinctio voluptatem quam. Minima vel culpa asperiores nobis similique facilis aliquid odio? Consectetur porro quis odit tempore non tempora sit consequuntur voluptatum mollitia, suscipit similique dolorum.</p> <p>Laboriosam dolorum explicabo reiciendis quo. Repellendus amet aliquam eum quidem! Dolorem accusantium magnam modi exercitationem temporibus dignissimos eaque enim at ratione! Illo voluptates sed nihil porro nostrum sint consectetur voluptatibus quo! Eveniet ipsa velit quos quas, expedita commodi modi ut. Neque animi accusantium, ad voluptatem laborum vero nesciunt ipsam voluptas enim quae id non voluptates culpa nemo totam beatae, illo assumenda ipsum? Debitis nulla voluptatem deleniti voluptas saepe modi nihil!</p>'
        // ]);
    }
}
