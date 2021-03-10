@php
    // use Illuminate\Support\Facades\DB;
    // $mahasiswas = DB::table('mahasiswa')->get();
@endphp
@extends('layouts.main')
@section('title', $title)
@section('content')
{{-- {{$mahasiswas}} --}}
    <div class="mt-2 row">
      <div class="col-md-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$student->name}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
              <p class="card-text">{{$student->email}}</p>
              <a href="#" class="btn btn-warning">edit</a>
              <a href="#" class="btn btn-danger">delete</a>
              <a href="/students" class="card-link">back</a>
            </div>
          </div>
      </div>
    </div>
@endsection