@extends('mainlayout')
@section('title','Edit Mentee')
@section('content')


<h1>Edit Mentee</h1>
<form action="{{ route('mentee.update', $mentee->id) }}" method="POST">
<div class="card-body">
         {{ csrf_field() }}
         <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <input type="text" name="nama" class="form-control" placeholder="Nama Mentee" value="{{ $mentee->nama }}">
        </div>
        <br>
        <div class="form-group">
            <input type="number" name="angkatan" class="form-control" placeholder="Angkatan" value="{{ $mentee->angkatan }}">
        </div>
        <br>
        <div class="form-group">
            <input type="text" name="mentor" class="form-control" placeholder="Nama Mentor" value="{{ $mentee->mentor }}">
        </div>
        <br>
        <div class="form-group">
            <label>Dosen PA</label>
            <br>
            <select name="dosenpa" class="custom-select">
                <option hidden value="{{ $mentee->dosenpa }}">
                    {{ $mentee->dosenpa }}
                </option>
                <option value="Beyonce">Beyonce</option>
                <option value="Bruno Mars">Bruno Mars</option>
                <option value="Rihanna">Rihanna</option>
            </select>    
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-success"> Save </button>
        </div>
    
    </form>
</div>


@endsection