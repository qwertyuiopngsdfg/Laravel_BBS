<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use App\Tag;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function save(UserRequest $request) {
        $user = new User();
        if ($request->name) $user->name = $request->name;
        if ($request->name) $user->title = $request->title;
        $user->skype = $request->skype;
        $user->sex = $request->sex;
        $user->body = $request->body;
        $user->password = Hash::make($request->password);
        $user->save();
        //タグが挿入されている場合の処理　されていなければリダイレクト。
        if (!$request->tags) return redirect('/');
        if (is_array($request->tags)) {
            foreach ($request->tags as $tag) {
                $tag_db = new Tag();
                $tag_db->entry_id = $user->id;
                $tag_db->tag = $tag;
                $tag_db->save();
            }   return redirect('/');
        } else { //タグの数が１つの場合の処理
            $tag_db = new Tag();
            $tag_db->entry_id = $user->id;
            $tag_db->tag = $request->tags;
            $tag_db->save();
            return redirect('/');
        }
    }

}
