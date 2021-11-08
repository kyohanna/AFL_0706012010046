@extends('mainlayout')
@section('title','Edit Mentor')
@section('content')


<h1>Edit Mentor</h1>
<form action="{{ route('mentor.update', $mentor->nama) }}" method="POST">
<div class="card-body">
         {{ csrf_field() }}
         <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <input type="text" name="nama" class="form-control" placeholder="Nama Mentor" value="{{ $mentor->nama }}">
        </div>
        <br>
        <div class="form-group">
            <input type="number" name="angkatan" class="form-control" placeholder="Angkatan" value="{{ $mentor->angkatan }}">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-success"> Save </button>
        </div>
    
    </form>
</div>


@endsection