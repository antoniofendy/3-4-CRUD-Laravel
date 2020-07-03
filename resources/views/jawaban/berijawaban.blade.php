@extends('adminlte.master')

@section('title', 'Beri Jawaban')

@section('konten')
    
<div class="card bg-warning">
    <div class="card-body">
        <h5 class="card-title">{{$tanya->judul}}</h5>
        <hr>
        <h6 class="card-subtitle mb-2 text-muted">Dari : {{$tanya->id_profil}}</h6>
        <p class="card-text">{{$tanya->isi}}</p>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form method="post" action="{{url('/jawaban/'.$tanya->id_pertanyaan)}}">
            @csrf
            <input type="hidden" name="id_pertanyaan" value="{{$tanya->id_pertanyaan}}">
            <div class="form-group">
                <label for="id_profil">Id Penjawab</label>
                <input type="text" name="id_profil" class="form-control" placeholder="ex: 1234" required>
            </div>
            <div class="form-group">
                <label for="isi">Isi Jawaban</label>
                <textarea name="isi" class="form-control" placeholder="ex: Menurut saya ..." required  cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Beri Jawaban</button>
            </div>
        </form>
    </div>
</div>

@endsection

