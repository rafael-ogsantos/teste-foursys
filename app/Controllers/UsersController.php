<?php

namespace App\Controllers;

use App\Models\Tasks;
use App\Models\User;

class UsersController
{
    public function index()
    {
        $users = (new User)->findAll();
        return view('users/index', compact('users'));
    }

    public function create()
    {

    }

    public function store($container, $request)
    {
       
        $user = new User;
        $create = $user->create($request->request->all());
        if($create) {
            return header('location: /');
        }
        return json_encode(['create' => false]);
    }
    
    public function update($container, $request)
    {
        $id = $request->attributes->get(1);
        (new User($container))->update(['id' => $id], $request->request->all());
        return header('location: /users');
    }

    public function edit($container, $request)
    {
        $id = $request->attributes->get(1);
        if($id) {
            $user = (new User)->findFirst($id);
        }
        return view('users/edit', compact('user'));
    }   

    public function destroy($container, $request)
    {
        $id = $request->attributes->get(1);
        (new User($container))->delete(['id' => $id]);
        return header('location: /users');
    }

    public function show($container, $request)
    {
        $user = new Tasks($container);
        $user = $user->get($request->attributes->get(1));
        return view('users/show', compact('user'));
    }
}