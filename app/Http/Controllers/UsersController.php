<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getUsers()
    {
      $users =  User::all();
      return view('folderUsers.users',['users'=>$users]);
    }
}
