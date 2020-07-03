@extends('adminlte.master')

@section('title', 'Jawaban')

@section('konten')
    <div class="card text-white bg-warning">
        <div class="card-header">
            <h3 class="card-title">{{$pertanyaan->judul}} - {{$pertanyaan->id_profil}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            {{$pertanyaan->isi}}
        </div>
        <!-- /.card-body -->
    </div>

    @foreach ($jawab as $item)
        <div class="card text-right text-white bg-info">
            <div class="card-header">
                <h3 class="card-title">Jawaban dari : {{$item->id_profil}}</h3>
            </div>
            <div class="card-body">
                {{$item->isi}}
            </div>
        </div>
    @endforeach

@endsection
