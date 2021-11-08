@extends('mainlayout')

@section('title','Mentee')
@section('content')

<h1> Mentee </h1>

<div class="card-tools">
    <a href="{{ route('mentee.create') }}" class="btn btn-success"> Add Mentee <i class="fa-plus-square"></i></a>
</div>

<div class="card-body">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Angkatan</th>
            <th>Mentor</th>
            <th>Dosen PA</th>   
            <th>Action</th>   
        </tr>
        @foreach ($mentee as $mentee)
        @php ($i = $loop->index)
         @php($i++)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $mentee->nama }}</td>
            <td>{{ $mentee->angkatan }}</td>
            <td>{{ $mentee->mentor }}</td>
            <td>{{ $mentee->dosenpa }}</td> 
            <td><a class="btn btn-warning" href="{{ route('mentee.show',$mentee->id) }}">Show</a> 
                <a class="btn btn-primary" href="{{ route('mentee.edit', $mentee->id) }}">Edit</a> 
                <form action="{{ route('mentee.destroy',$mentee['id'])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
        </tr>
        @endforeach
 
@endsection