<?php

namespace App\Http\Controllers;

use App\User;
use App\Userlevel;
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
        $users = User::leftjoin("userlevel", "username.menulevel", "userlevel.kode")
            ->select("username.*", "userlevel.keterangan as level")
            ->orderBy("username.username", "asc")
            ->get();
        return view("user.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userlevels = Userlevel::all();
        return view("user.create", compact("userlevels"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route("user.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(User $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    {
        $user = User::where("username", $username)->get()->last();
        $userlevels = Userlevel::all();
        return view("user.edit", compact("user", "userlevels"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $username)
    {
        User::where("username", $username)->update($request->except(["_token", "_method"]));
        return redirect()->route("user.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($username)
    {
        User::where("username", $username)->delete();
        return redirect()->route("user.index")->with("success", "Data berhasil dihapus");
    }
}
