<?php

namespace App\Http\Controllers;

//use http\Client\Curl\User;
use App\Post;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use function PHPUnit\Framework\throwException;

class HomeController extends Controller
{
    public function index()
    {

        $post = Post::all();
        dd($post->toJson());

        return view('Home');

    }

}


