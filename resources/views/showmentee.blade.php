@extends('mainlayout')
@section('title','Mentee')
@section('content')

<div>
    <h3>Nama : {{$mentee['nama']}}</h3>
    <h3>Dosen PA : {{$mentee['dosenpa']}}</h3>
    
</div>

@endsection