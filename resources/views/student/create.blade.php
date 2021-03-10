@php
    // use Illuminate\Support\Facades\DB;
    // $mahasiswas = DB::table('mahasiswa')->get();
@endphp
@extends('layouts.main')
@section('title', 'Create')
@section('content')
{{-- {{$mahasiswas}} --}}
<h1 class="m-3">Add Information Below</h1>
    <div class="mt-2 row">
      <div class="col-md-6">
        <form method="post" action="/students">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="name">
              @error('name')
                  <div id="name" class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="nim" class="form-label">NIM</label>
              <input type="text" class="form-control" name="nim" id="nim" aria-describedby="nim">
              @error('nim')
              <div id="nim" class="invalid-feedback">
                  {{$message}}
              </div>
            @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="email">
              @error('email')
              <div id="email" class="invalid-feedback">
                  {{$message}}
              </div>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
    </div>
@endsection