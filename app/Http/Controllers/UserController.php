<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    //

    public function homeView(){
        return view('home');
    }

    public function createUserView(){
        return view('create-user');
    }

    public function editUserView($id){
        $user = User::find($id);
        return view('Edituser')->with('user', $user);
    }

    public function createUser(CreateUserRequest $request){
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $errors = new MessageBag();
        $errors->add("new_user", " User Successfully Created");

       return redirect(to: '/')->withErrors($errors);
    }

    public function getUsers(){
        $users = User::all();
        return view('Users')->with('users',$users);
    }

    public function updateUser(EditUserRequest $request){
        $user = User::find($request->id);
        $user->update($request->all());
        $errors = new MessageBag();
        $errors->add("msg", "User Details Updated");
        return redirect(to: '/')->withErrors($errors);
    }

    public function deleteUser($id){
        $user = User::find($id)->delete();
        $errors = new MessageBag();
        $errors->add("msg", "User Deleted");
        return redirect(to: '/users')->withErrors($errors);
    }
}
