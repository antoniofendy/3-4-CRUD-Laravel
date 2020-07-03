@extends('adminlte.master')

@section('title', 'Pertanyaan Tersedia')

@section('konten')

    @foreach ($tanya as $item)
            <div class="list-group">
                <a href="/beri-jawaban/{{$item->id_pertanyaan}}" class="list-group-item list-group-item-action mb-2 bg-warning">{{$item->judul}}</a>
            </div>
    @endforeach

@endsection

