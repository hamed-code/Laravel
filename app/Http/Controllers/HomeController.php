<?php

namespace App\Http\Controllers;

//use http\Client\Curl\User;
use App\Comment;
use App\Country;
use App\Image;
use App\Post;
use App\User;
use App\Address;
use App\Tag;
use App\Video;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
//use phpDocumentor\Reflection\DocBlock\Tag;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use function PHPUnit\Framework\throwException;

class HomeController extends Controller
{
    public function index()
    {
//        $messages = [
//            'errors' => [
//                'something went wrong!'
//            ],
//            'messages' => [
//                'create successfully...'
//            ]
//        ];
//        $messagebag = new \Illuminate\Support\MessageBag($messages);
//        if ($messagebag->has('errors')){
//            dd($messagebag->get('errors'));
//        }

//        $error = new \Illuminate\Support\MessageBag();
//        $error->add('error', 'something went wrong!');

        return view('welcome')->withErrors(['error' => 'something went wrong']);

    }
}


