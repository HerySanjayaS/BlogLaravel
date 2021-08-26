<?php

namespace App\Models;

class Post
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hery Sanjaya Situmorang",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, suscipit beatae recusandae perspiciatis fugiat unde, natus odio eius totam, repellendus optio reprehenderit a blanditiis veritatis animi ipsum facilis minima. Odio nostrum necessitatibus nesciunt adipisci modi iusto omnis minus, numquam autem ipsum pariatur reiciendis sed perferendis tempora hic ad repellat provident dignissimos molestias aliquid. Corrupti neque officia maiores voluptates tempore optio quo consequatur iusto pariatur deserunt. Debitis nostrum nesciunt suscipit deleniti, atque possimus odio recusandae labore id dignissimos. Fugit quis atque dolore nam ipsa at totam, nostrum natus eum! Enim, voluptatem."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ferdiansyah Al Khafi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aperiam saepe perferendis necessitatibus. Ea tempore culpa odio deleniti, nulla perspiciatis accusamus nesciunt veniam officiis adipisci consequuntur. Distinctio inventore numquam cumque maiores doloribus dolor unde voluptate non ut iste excepturi, deleniti cum soluta molestiae earum quos explicabo adipisci quibusdam itaque totam! Placeat, commodi. Corporis, placeat nostrum aperiam eligendi voluptate sed quod aliquam? Quasi saepe ipsum rerum ipsam laborum illo voluptas aperiam modi. Aliquid modi, velit quibusdam voluptate quasi unde consequatur molestiae!"
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
