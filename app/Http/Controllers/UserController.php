<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Hash;
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
        $password = Hash::make($request->password);
        User::create([
            // 'id_pegawai' => $request->id_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'password' => $password,
        ]);

        $searchuser = User::where('username', $request->username)->first();

        $request->file('foto')->storeAs('avatars', $searchuser->nama_pegawai.'.png', 'public');

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
        $user = User::where('id_pegawai', $id)->firstOrFail();

        return response()->json($user);
        // return view('user/index', ['edituser' => $user, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validated = $request->validated();
        $user = User::where('id_pegawai', $id)->first();
        $rules = [
            'nama_pegawaiE' => 'required',
            'alamatE' => 'required',
            'usernameE' => [
                'min:5',
                'required',
                Rule::unique('users', 'username')->ignore($user->id_pegawai, 'id_pegawai'),
            ],
        ];
        $message = [
            'required' => ':attribute harus diisi!',
            'min'  => ':attribute diisi minimal :min karakter!',
        ];
        Validator::make($request->all(), $rules, $message)->validate();

        User::where('id_pegawai', $id)->update([
            // 'id_pegawai' => $request->id_pegawai,
            'nama_pegawai' => $request->nama_pegawaiE,
            'alamat' => $request->alamatE,
            'username' => $request->usernameE,
            // 'password' => $request->passwordE,
        ]);

        if(!empty($request->file('fotoE'))){  
            Storage::disk('public')->delete('avatars/'.$user->nama_pegawai.'.png');
            $request->file('fotoE')->storeAs('avatars', $request->nama_pegawaiE.'.png', 'public');   
        }else{
            Storage::disk('public')->move('avatars/'.$user->nama_pegawai.'.png', 'avatars/'.$request->nama_pegawaiE.'.png');
        }

        // session('user')->username->pull('nama_pegawai', $request->nama_pegawai);
        // $nama_pegawai = session('user')->nama_pegawai;
        // $userE = session()->pull('user', [])->toArray(); // Second argument is a default value
        // if(($key = array_search($nama_pegawai, $userE)) !== false) {
        //     $userE[$key]=$request->nama_pegawaiE;
        // }
        // session()->put('user', $userE);
        // dd(session('user'));
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
