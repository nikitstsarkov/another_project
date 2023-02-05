<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1);
        foreach ($posts as $post) {
            dump($post->title);
        }
        dd('end');
    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'title of post from phpshtorm',
                'content' => 'some interesting content',
                'image' => 'image.jpg',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'another title of post from phpshtorm',
                'content' => 'another some interesting content',
                'image' => 'another image.jpg',
                'likes' => 50,
                'is_published' => 1,
            ],
        ];
        Post::create([   // это для создания таблицы
            'title' => 'another title of post from phpshtorm',
            'content' => 'another some interesting content',
            'image' => 'another image.jpg',
            'likes' => 50,
            'is_published' => 1,
        ]);


        dd('created');
    }

    public function update()
    {
        $post = Post::find(6);

        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 1000,
            'is_published' => 0,
        ]);
        dd('updated');
    }


}

