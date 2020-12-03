@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Data Mahasiswa</h1>
         
      <table class="table">
        <thead class="zad-header-kolom" style="background-color:background-color: #f1fffe !important">
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($parasiswa as $siswa)
                
         
          <tr>
            <th scope="row">{{$siswa->id}}</th>
            <td>{{$siswa->firstname}}</td>
            <td>{{$siswa->lastname}}</td>
            <td>{{$siswa->email}}</td>
            <td>{{$siswa->phone}}</td>
            <td>edit || Delete</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection