@extends('master')

@section('konten')
<h4>Selamat Datang <b>{{ Auth::user()->name }}</b>, Anda login sebagai <b>{{ Auth::user()->role }}</b></h4>
<div class="row">
<div class="col">
<a href="{{ route('tampilsantri') }}">Santri</a>
</div>
</div>
@endsection
