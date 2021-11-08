@extends('mainlayout')
@section('title','Add Mentee')
@section('content')


<h1>Add New Mentee</h1>

<div class="card-body">
    <form action="{{ route('mentee.store') }}" method="POST">
         {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="nama" class="form-control" placeholder="Nama Mentee">
        </div>
        <br>
        <div class="form-group">
            <input type="number" name="angkatan" class="form-control" placeholder="Angkatan">
        </div>
        <br>
        <div class="form-group">
            <select name="mentor" class="form-control">
                <option value="" selected disabled hidden>Mentor</option>
                @foreach ($mentors as $mentor)
                    <option value="{{$mentor['nama']}}">{{$mentor['nama']}}</option>
                    
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label>Dosen PA</label>
            <br>
            <select name="dosenpa" class="custom-select">
                <option value="Beyonce">Beyonce<option>
                <option value="Bruno Mars">Bruno Mars<option>
                <option value="Rihanna">Rihanna<option>
            </select>    
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-success"> Save </button>
        </div>
    
    </form>
</div>


@endsection