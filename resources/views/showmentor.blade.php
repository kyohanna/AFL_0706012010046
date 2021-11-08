@extends('mainlayout')
@section('title','Mentor')
@section('content')

<div>
    <h3>Nama : {{$mentor['nama']}}</h3>
    <p>Angkatan: {{$mentor['angkatan']}}</p>
</div>

@endsection