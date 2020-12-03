<?php

namespace App\Http\Controllers;

use App\Siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $parasiswa = Siswa::all();
        return view('welcome', compact('parasiswa'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $siswa = new Siswa;
        $siswa->firstname = $request->firstname;
        $siswa->lastname = $request->lastname;
        $siswa->email = $request->email;
        $siswa->phone = $request->phone;
        $siswa->save();
        return redirect(route('create'))->with('successMsg', 'Berhasil ditambah');
    }
}
