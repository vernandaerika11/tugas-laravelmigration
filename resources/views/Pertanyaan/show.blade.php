@extends('adminlte.master')

@section('content')
<div class="mt-3 ml-3">
<h4>Judul : {{ $tanya->judul }} </h4>
<p>Isi : {{ $tanya->isi }} </p>
</div>
@endsection