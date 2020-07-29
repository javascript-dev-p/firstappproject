<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function photoshow()
    {
        return view('users.photoshow');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::lists('name', 'id')->all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        // User::create($request->all());
        // return redirect('/users');
        $input = $request->all();

        if ($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['path' => $name]);
            $input['photo_id'] = $photo->id;
        }

        $input['password'] = bcrypt($request->password);
        User::create($input);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrfail($id);
        $roles = Role::lists('name', 'id')->all();
        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        $user = User::findOrfail($id);

        if(trim($request -> password) == ''){
            $input = $request -> except('password');
        }
        else{
            $input = $request->all();
            $input['password'] = bcrypt($request -> password);

        }

        if ($file = $request->file('photo_id')) {
            if($user -> photo_id != "")
            {
                unlink(public_path(). $user -> photo -> path);
            }
            $name = time() . $file->getClientOriginalName();
            $file -> move('images', $name);
            $photo = Photo::create(['path' => $name]);
            $input['photo_id'] = $photo->id;
        }

        $user->update($input);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $user = User :: findOrfail($id);
        unlink(public_path() . $user -> photo -> path);
        $user -> delete();
        Session :: flash('deleted_user_msg', '.مشخصات کاربر با موفقیت حذف شد');

        return redirect('/users');
    }
}
