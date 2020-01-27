<?php

namespace App\Http\Controllers;

use App\user;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        $user = user::all();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $user = new user;
        $user->name=$request['name'];
        $user->level=$request['level'];
        $user->us_identitas=$request['us_identitas'];
        $user->us_alamat=$request['us_alamat'];
        $user->us_telp=$request['us_telp'];
        $user->email=$request['email'];
        $user->password=Hash::make($request['password']);
        $user->save();

        return redirect('/user')->with('success', 'Berhasil Menambahkan Data');
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
    public function edit($user)
    {
        //
        $user = user::find($user);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        //
        $user = user::find($user);
        $user->name=$request['name'];
        $user->level=$request['level'];
        $user->us_identitas=$request['us_identitas'];
        $user->us_alamat=$request['us_alamat'];
        $user->us_telp=$request['us_telp'];
        $user->email=$request['email'];
        $user->password=Hash::make($request['password']);
        $user->save();

        return redirect('/user')->with('info', 'Berhasil Mengubah Data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        //
        $user = user::find($user);
        $user->delete();
        return redirect('/user')->with('success', 'Berhasil Menghapus Data');
    }
}
