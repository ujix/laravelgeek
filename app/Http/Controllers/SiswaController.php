<?php

namespace App\Http\Controllers;

use App\Siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $parasiswa = Siswa::paginate(5);
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

    public function edit($id){
        $siswa = Siswa::find($id);
        return view('edit',compact('siswa'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $siswa = Siswa::find($id);
        $siswa->firstname = $request->firstname;
        $siswa->lastname = $request->lastname;
        $siswa->email = $request->email;
        $siswa->phone = $request->phone;
        $siswa->save();
        return redirect(route('home'))->with('successMsg', 'Berhasil diubah');
    }


    public function delete($id){

        Siswa::find($id)->delete();
        return redirect(route('home'))->with('successMsg', 'Berhasil dihapus');

    }





}
