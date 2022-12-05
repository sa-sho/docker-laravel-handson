<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    protected $user;
    
    public function __construct(User $user)
    {
    $this->user = $user;
    }

    public function getEdit($id)
    {
        $user = $this->user->selectUserFindById($id);
        return view('users.edit', compact('user'));
    }
};
