<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use App\User;
use App\Thread;

class IndexController extends Controller
{
    public function welcome()
    {
        $users = User::all();

        return view('welcome', [
            'users' => $users
        ]);
    }
    public function user(User $user)
    {
        $threads = $user->threads()->get();
        return view('user', [
            'user' => $user,
            'threads' => $threads
        ]);
    }
    public function postDeleteUser(User $user)
    {
        // $user->delete();

        return ['redirect' => route('welcome')];
    }
    public function postUpdateUser($name, $email, $id)
    {
        $user = User::find($id);

        $user->name = $name;
        $user->email = $email;
        $user->save();
    }

    public function thread(Thread $thread)
    {
        return view('thread', [
            'thread' => $thread
        ]);
    }
}
