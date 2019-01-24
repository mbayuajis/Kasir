<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user/index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {

        $validated = $request->validated();

        User::create([
            // 'id_pegawai' => $request->id_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        $searchuser = User::where('username', $request->username)->first();

        $request->file('foto')->storeAs('avatars', $searchuser->id_pegawai.'.png', 'public');

        return redirect('user')->with('message', 'Berhasil Menambahkan User');
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
        $user = User::where('id_pegawai', $id)->first();
        $users = User::all();
        if(!$user)
            abort(404);
        
        return view('user/index', ['edituser' => $user, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, $id)
    {
        $validated = $request->validated();

        User::where('id_pegawai', $id)->update([
            // 'id_pegawai' => $request->id_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        Storage::disk('public')->delete('avatars/'.$id.'.png');
        $request->file('foto')->storeAs('avatars', $id.'.png', 'public');

        return redirect('user')->with('message', 'Berhasil Mengubah User '.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id_pegawai', $id)->delete();
        Storage::disk('public')->delete('avatars/'.$id.'.png');
        return redirect('user')->with('message', 'Berhasil Menghapus User '.$id);
    }
}
