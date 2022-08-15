<?php

namespace App\Models;



class Post 
{

    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ananda Nichola",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatibus ducimus sequi, iste est sunt officia aliquam ratione, at omnis perspiciatis assumenda quis quae? Asperiores magnam nobis at a quidem maxime. Repellat nobis asperiores hic eius unde voluptates aliquam dolorum. Quod maiores ipsum impedit voluptates, rem quas sint facilis voluptatem officiis. Debitis fugit consequatur eius inventore necessitatibus quibusdam vel ipsam repudiandae voluptatibus. Sunt, blanditiis veritatis consectetur officia quos nisi, aliquid facilis atque soluta quod dicta sequi neque animi reprehenderit itaque cum assumenda tenetur? Voluptatem, sint. Dolorum, quas perferendis!
            "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ananda Nichola",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda id tempore sit, quibusdam, expedita aliquid exercitationem dolor saepe, dolorum laudantium vero rem aut. Velit dignissimos, unde nemo quasi cum culpa, odit ab rerum quod molestias itaque inventore quibusdam suscipit id nam assumenda veniam quae, impedit vitae tenetur corporis? Reprehenderit eius aut maiores quos alias quod aliquam dolores dignissimos laboriosam corporis debitis similique neque hic quidem ipsam ut ratione aspernatur ea molestias, deserunt deleniti doloribus porro. Voluptatem ipsa modi aut libero voluptate obcaecati, nihil nisi veritatis porro ex. Quaerat magnam, repellat sequi nihil velit quod cupiditate neque molestias in maxime consectetur?
            "
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstwhere('slug', $slug);
    }


}
