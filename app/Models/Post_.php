<?php

namespace App\Models;

class post
{
    static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Daniel Sitompul",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis voluptatem delectus quas natus quam vitae at laudantium necessitatibus ipsam nam, id pariatur, culpa incidunt veritatis reprehenderit tenetur obcaecati dicta earum. Nihil, quia dolorum dolore iusto quod soluta labore odit eaque in quo, enim aliquam? Amet quidem perferendis, facilis accusamus dolores sapiente neque optio rem nisi cumque vel, velit consectetur sed illo exercitationem nemo iste quo, aut veniam repudiandae. Optio ullam amet quae, quia corporis consequuntur? Minus officia debitis iusto dolorem!"
        ],
        [
            "title" => "Judul Post Doddy",
            "slug" => "judul-post-kedua",
            "author" => "Doddy",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae voluptatum cumque quia numquam voluptates aperiam quibusdam nam dolor enim molestiae, iste rem et. Ex rem iste consectetur veniam commodi ipsa nobis praesentium. Architecto dolores nostrum itaque natus culpa. Delectus quos beatae officia quam deserunt ullam temporibus optio dicta dolor non necessitatibus saepe est, velit fugiat incidunt voluptatem laborum commodi quis et hic asperiores perspiciatis recusandae id corrupti. Id esse dolore nesciunt adipisci hic voluptates molestias debitis. Distinctio eos autem hic, perferendis pariatur quo dicta eveniet suscipit tempore reiciendis veritatis sed odit atque nisi quidem accusantium nulla rerum eum adipisci cupiditate."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
