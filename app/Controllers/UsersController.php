<?php

namespace App\Controllers;

use App\Models\Tasks;

class UsersController
{
    public function show($container, $request)
    {
        $user = new Tasks($container);
        $data = $user->get($request->attributes->get(1));
        return view('index', ['user' => $data]);
    }
}