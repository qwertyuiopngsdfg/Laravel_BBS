<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tag;

class PagesController extends Controller
{
    public function index() {
        $users = User::latest()->get();
        $tags  = Tag::get();
        return view('index', ['users' => $users, 'tags' => $tags]);
    }

}
