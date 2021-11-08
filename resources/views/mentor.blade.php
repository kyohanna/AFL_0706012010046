@extends('mainlayout')

@section('title','Mentor')
@section('content')

<h1> Mentor </h1>

<div class="card-tools">
    <a href="{{ route('mentor.create') }}" class="btn btn-success"> Add Mentor <i class="fa-plus-square"></i></a>
</div>

<div class="card-body">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Angkatan</th> 
            <th>Action</th>   
        </tr>
        @foreach ($mentor as $mentor)
        @php ($i = $loop->index)
         @php($i++)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $mentor->nama }}</td>
            <td>{{ $mentor->angkatan }}</td>
            <td><a class="btn btn-warning" href="{{ route('mentor.show',$mentor->nama) }}">Show</a> 
                <a class="btn btn-primary" href="{{ route('mentor.edit', $mentor->nama) }}">Edit</a> 
                <form action="{{ route('mentor.destroy',$mentor['nama'])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
 
@endsection