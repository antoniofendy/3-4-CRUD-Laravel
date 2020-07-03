@extends('adminlte.master')

@section('title', 'Home')

@section('konten')
    <div class="container">
        <a href="{{url('/pertanyaan/create')}}"><button type="button" class="btn btn-primary btn-lg">Buat Pertanyaan</button></a>
        <a href="{{url('/beri-jawaban')}}"><button type="button" class="btn btn-secondary btn-lg">Berikan Jawaban</button></a>
    </div>
@endsection

