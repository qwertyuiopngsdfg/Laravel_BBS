<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tag;

class PagesController extends Controller
{
    public function index() {
        $users = User::latest()->paginate(5);;
        $tags  = Tag::get();
        return view('index', ['users' => $users, 'tags' => $tags]);
    }

    public function confirm(User $user) {
        $tags = Tag::where('entry_id', $user->id)->get();
        return view('confirm', ['user' => $user,  'tags' => $tags]);
    }
}
