<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'user_id' => function(){
        	return factory(App\Models\User::class)->create()->id;
        },
        'title' => $faker->catchPhrase,
        'slug' => function (array $post) {
                    return str_slug($post['title']);
                },
        'body' => $faker->paragraph(3),
    ];
});