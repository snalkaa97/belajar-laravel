@php
    // use Illuminate\Support\Facades\DB;
    // $mahasiswas = DB::table('mahasiswa')->get();
@endphp
@extends('layouts.main')
@section('title', $title)
@section('content')
{{-- {{$mahasiswas}} --}}
  @if (session('status'))
      <div class="alert alert-success">
        {{session('status')}}
      </div>
  @endif

    <h1 class="m-3">student</h1>
    <a href="/students/create" class="mb-3 btn btn-primary">Create Student</a>
    <div class="row">
      <div class="col-md-6">
        <ul class="list-group">
          @foreach ($students as $student)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$student->name}}
            <a class="badge bg-info" href="/students/{{$student->id}}">detail</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
@endsection