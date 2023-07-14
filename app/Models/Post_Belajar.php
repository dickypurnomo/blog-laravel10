<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Messi",
            "body" => "Ipsum laboris mollit commodo minim adipisicing deserunt. Ut velit sit quis excepteur ut occaecat ad ullamco commodo consectetur. Lorem culpa occaecat dolore commodo tempor mollit. Culpa tempor consectetur ipsum ullamco. Nulla voluptate sunt ad deserunt laborum aliquip quis ea dolore excepteur elit do ex. Aliquip cupidatat aliqua fugiat aute velit ea Lorem Lorem. Amet do id non elit cupidatat officia nulla laboris officia Lorem magna. Nostrud anim excepteur quis sit irure voluptate sint velit occaecat nulla magna ullamco. Aute in fugiat consequat commodo ipsum aliqua duis adipisicing in ullamco minim deserunt incididunt."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ronaldo",
            "body" => "Fugiat qui aliquip ut ea ullamco ipsum quis. Occaecat tempor ut qui laborum amet exercitation esse eiusmod. Officia in fugiat tempor quis officia ut. Pariatur reprehenderit minim cillum fugiat ut aliquip nisi laborum in nostrud proident et. Velit ea ullamco officia do deserunt qui. Minim mollit minim aliquip deserunt ex sunt duis cupidatat veniam veniam commodo consectetur adipisicing non. Quis et ullamco deserunt ad proident incididunt nisi pariatur cillum duis cillum. Labore laborum Lorem et magna proident. Ex ea velit tempor dolore in occaecat duis excepteur nulla et reprehenderit. Quis ullamco laborum tempor reprehenderit mollit pariatur esse sint quis laborum duis sunt veniam."
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
