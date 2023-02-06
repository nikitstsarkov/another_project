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
            'title' => 'title of post from phpshtorm',
            'content' => 'some interesting content',
            'image' => 'image.jpg',
            'likes' => 20,
            'is_published' => 1,
        ]);


        dd('created');
    }

    public function update()
    {
        $post = Post::find(4);

        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 1000,
            'is_published' => 0,
        ]);
        dd('updated');
    }
   public function delete()  //восстановить удаленное
   {
       $post = Post::withTrashed()->find(2);
       $post->restore();
       dd('deleted');
   }
//public function delete() //удалить
//   {
//       $post = Post::find(2);
//       $post->delete();
//       dd('deleted');

//firstOrCreate
//updateOrCreate

     public function firstOrCreate()
     {
         //$post = Post::find(1);

         $anontherPost = [
             'title' => 'some post',
             'content' => 'some content',
             'image' => 'image.jpg',
             'likes' => 200,
             'is_published' => 1,
         ];

         $post = Post::firstOrCreate([
             'title' => 'some post'
         ],[
             'title' => 'some post',
             'content' => 'some content',
             'image' => 'image.jpg',
             'likes' => 200,
             'is_published' => 1,
         ]);
         dump($post->content);
         dd('end');
     }

     public function updateOrCreate()
     {
         $anontherPost = [
             'title' => 'updateOrCreate some post',
             'content' => 'updateOrCreate some content',
             'image' => 'updateOrCreate image.jpg',
             'likes' => 100,
             'is_published' => 1,
         ];

         $post = Post::updateOrCreate([
             'title' => 'updateOrCreate some post'
         ],[
             'title' => 'updateOrCreate some post',
             'content' => 'updateOrCreate some content',
             'image' => 'updateOrCreate image.jpg',
             'likes' => 100,
             'is_published' => 1,
         ]);
         dump($post->content);
         dd('update');
     }
}

