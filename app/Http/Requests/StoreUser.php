<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => ':attribute harus diisi!',
            'min'  => ':attribute diisi minimal :min karakter!',
            'unique' => ':attribute tidak tersedia!'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'id_pegawai' => 'required|min:10',
            'nama_pegawai' => 'required',
            'alamat' => 'required',
            'username' => 'min:5|required|unique:users,username',
            'password' => 'min:8|required|min:8',
            'foto' => 'required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'nama_pegawai' => 'Nama Pegawai',
            'alamat' => 'Alamat',
            'username' => 'Username',
            'password' => 'Password',
            'foto' => 'Foto',
        ];
    }
}
