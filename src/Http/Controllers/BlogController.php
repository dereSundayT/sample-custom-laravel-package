<?php

namespace  Toluwani\BlogToolkits\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class BlogController extends Controller
{

    public function index(): View|Factory|Application
    {
        return view("blog::posts.index");
    }


    public function create(): View|Factory|Application
    {
        return view("blog::posts.create");
    }


    public function edit($post_id): View|Factory|Application
    {
        return view("blog::posts.edit");
    }





}
