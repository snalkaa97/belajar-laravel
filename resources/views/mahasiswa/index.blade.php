@php
    // use Illuminate\Support\Facades\DB;
    // $mahasiswas = DB::table('mahasiswa')->get();
@endphp
@extends('layouts.main')
@section('title', $title)
@section('content')
{{-- {{$mahasiswas}} --}}
    <h1 class="m-3">Mahasiswa</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($mahasiswas as $item)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->nim}}</td>
              <td>{{$item->email}}</td>
              <td> 
                  <a href="" class="badge bg-success">edit</a>
                  <a href="" class="badge bg-danger">delete</a>
              </td>
            </tr>   
            @endforeach
      </table>


@endsection