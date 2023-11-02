<?php

namespace App\Models;

class Post 
{
    private static $blog_posts =  [
        [
            "title" => "Black Hole",
            "slug" => "black-hole",
            "author" => "Dea Abeliya",
            "body" => "A black hole is a region in space where gravity is so strong that nothing, including light or other electromagnetic waves, can escape it. They form from the remnants of a large star that dies in a supernova explosion, and the resulting gravitational field is incredibly powerful. Key features of a black hole include the event horizon, which is the boundary in spacetime through which matter and light can only pass inward towards the mass of the black hole, and the singularity, which is the point at the center of a black hole where spacetime curvature becomes infinite."
        ],
        [
            "title" => "Aurora2",
            "slug" => "aurora",
            "author" => "Gilang Syaputra",
            "body" => "Aurora is a natural light display in Earth's sky, predominantly seen in high-latitude regions. It is also known as the northern lights (aurora borealis) or southern lights (aurora australis). Aurora is caused by the ionization and excitation of atmospheric constituents leading to auroral emissions."
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
