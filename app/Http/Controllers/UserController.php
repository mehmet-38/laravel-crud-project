<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users')->with('users', $users);
    }


    public function create()
    {
        return view('user_create');
    }


    public function store(Request $request)
    {
        $user = $request->all();
        $result = User::create($user);
        if ($result)
            return redirect('/');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user_edit')->with('user', $user);
    }


    public function update(Request $request)
    {
        $user_id = $request->id;
        $user = User::find($user_id);
        $user_data = $request->all();
        $user->update($user_data);
        return redirect('/');
    }


    public function destroy($id)
    {
        $result =  User::destroy($id);
        if ($result) {
            return redirect('/');
        } else {
            return json_encode("wrong");
        }
    }
}
