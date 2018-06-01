<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Carbon\Carbon;

class UserController extends Controller
{

    public function update(Request $request, $id)
    {
        dd($request->all());
    }
}
