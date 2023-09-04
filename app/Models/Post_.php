<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Zilong",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quidem alias fugit ipsum quam, nesciunt pariatur exercitationem dolor optio qui iusto voluptas atque tenetur expedita deserunt commodi laudantium explicabo totam iste aliquam itaque eos quia? Exercitationem, dolore earum blanditiis alias a id, libero pariatur dolores, architecto ut laborum ullam sed. Aut expedita eum autem quam, maiores veritatis cum molestias fugit doloremque, optio voluptates iure eos. Hic voluptatem ex, est consequuntur nostrum dicta voluptate eum? Dignissimos dolorum repellat officiis doloribus ex!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Balmond",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. In impedit, animi maiores doloribus, dolor blanditiis expedita quasi quia at fuga repellat aspernatur, molestiae vero eos ullam quas tempora. Quo sapiente maxime consequatur, exercitationem nam quia. Animi harum et autem voluptate adipisci dignissimos blanditiis. Alias tempora est perferendis, ut molestiae obcaecati ipsum sit sapiente aut officiis dolores iure? Voluptate in veniam quaerat commodi, optio sit nihil aspernatur harum blanditiis quis unde, sequi rerum cum molestiae temporibus? Esse eaque placeat cumque reprehenderit id, impedit quas dolore officia, natus, ipsam perferendis dolores voluptate nemo mollitia ea quia autem. Accusantium et corporis illo quibusdam!"
        ]
    ];

    public static function all()
    {
        // return $this->blog_posts; // if not property static
        // return self::$blog_posts; // array without collections
        return collect(self::$blog_posts); // Creating Collections
    }

    public static function find($slug)
    {
        // $posts = self::$blog_posts; // spesialist for property static
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        // return $post; // without Collections

        $posts = static::all(); // spesialist for method static
        return $posts->firstWhere('slug', $slug); // With Collections
    }
}
