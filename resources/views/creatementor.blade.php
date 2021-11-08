@extends('mainlayout')
@section('title','Add Mentor')
@section('content')


<h1>Add New Mentor</h1>

<div class="card-body">
    <form action="{{ route('mentor.store') }}" method="POST">
         {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="nama" class="form-control" placeholder="Nama Mentor">
        </div>
        <br>
        <div class="form-group">
            <input type="number" name="angkatan" class="form-control" placeholder="Angkatan">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-success"> Save </button>
        </div>
    
    </form>
</div>


@endsection