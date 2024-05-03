<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
        [ 
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Idk',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta rem, nostrum omnis similique unde animi illo illum? Exercitationem id provident explicabo minima. Cum doloribus ipsam, aut ullam assumenda quod nulla tempora in officiis, repellat dolorum ratione rem laudantium ut ducimus dolore cumque accusantium consequuntur nesciunt dolorem rerum est fuga quae. Suscipit amet error dolores dicta cumque, exercitationem voluptates a debitis ducimus illo id eligendi doloremque repudiandae. Sed veritatis asperiores optio ipsam soluta a obcaecati enim perferendis consequuntur inventore? Mollitia et molestias sint adipisci eius repudiandae. Quaerat, impedit. Sed, autem est?.'
        ],
        [ 
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Tom',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta rem, nostrum omnis similique unde animi illo illum? Exercitationem id provident explicabo minima. Cum doloribus ipsam, aut ullam assumenda quod nulla tempora in officiis, repellat dolorum ratione rem laudantium ut ducimus dolore cumque accusantium consequuntur nesciunt dolorem rerum est fuga quae. Suscipit amet error dolores dicta cumque, exercitationem voluptates a debitis ducimus illo id eligendi doloremque repudiandae. Sed veritatis asperiores optio ipsam soluta a obcaecati enim perferendis consequuntur inventore? Mollitia et molestias sint adipisci eius repudiandae. Quaerat, impedit. Sed, autem est?.'
        ]
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