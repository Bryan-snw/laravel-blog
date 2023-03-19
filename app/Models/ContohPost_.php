<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post 1",
            "slug" => "judul-post-1",
            "author" => "Bryan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quidem similique dolorum necessitatibus obcaecati tempora a harum ducimus, quibusdam odit. Corporis quod ullam cumque, aspernatur quibusdam quisquam? Ea repellendus incidunt officia atque quidem tenetur commodi, qui ad voluptas tempore dolorem. Facilis possimus explicabo commodi est deserunt ad optio suscipit eos. Rerum itaque quibusdam alias, laboriosam distinctio ratione consequatur repellendus dignissimos autem quaerat officiis? Tempore officia aspernatur sequi quidem! Blanditiis a odit porro. Quos incidunt corrupti dicta quis vitae vel temporibus."
        ],
        [
            "title" => "Judul Post 2",
            "slug" => "judul-post-2",
            "author" => "Andrew Tate",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, dolorem? Quos aliquid nulla perspiciatis animi voluptate a beatae eos nam corrupti laboriosam molestiae commodi minus officiis, autem, soluta incidunt optio, facilis iure. Illo iure, quia, laudantium architecto consequatur fuga recusandae qui laboriosam quisquam nisi, itaque dolore iusto. Unde ea aliquam natus itaque ab voluptatem id fugit, accusantium veritatis. Architecto illum, beatae eligendi soluta quas sed quibusdam voluptatem illo minus libero, repellat consequuntur ipsum ullam! Incidunt, nemo ea. Vitae, nam architecto accusamus mollitia molestiae ea qui saepe rem veritatis dolore consequatur, sit facere soluta, reiciendis cum at minus adipisci dolor ducimus."
        ],
    ];

    public static function all()
    {
        // Self:: karena static untuk propery
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // static:: untuk method static
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
