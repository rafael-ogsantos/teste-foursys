<?php

namespace App\Controllers;

use App\Models\Tasks;
use App\Models\User;

class UsersController
{
    public function index()
    {
        return view('users/index');
    }

    public function create()
    {

    }

    public function store($container, $request)
    {
        $user = new User;
        $create = $user->create($request->request->all());
        if($create) {
            echo 'cruado';
        }
    }
    
    public function update()
    {

    }

    public function edit()
    {

    }

    public function destroy()
    {

    }

    public function show($container, $request)
    {
        $user = new Tasks($container);
        $data = $user->get($request->attributes->get(1));
        return view('index', ['user' => $data]);
    }
}