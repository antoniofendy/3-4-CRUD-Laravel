@extends('adminlte.master')

@section('title', 'Form Update Pertanyaan')

@section('konten')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <form method="post" action="{{url('/pertanyaan/'.$data_tanya->id_pertanyaan)}}">
                    @csrf
                    <!-- Menredirect method post menjadi put sesuai di route -->
                    @method('PUT')
                    <input type="hidden" name="id_pertanyaan" value="{{$data_tanya->id_pertanyaan}}">
                    <div class="form-group">
                        <label for="id_profil">Id Profil</label>
                        <input type="text" name="id_profil" class="form-control" placeholder="ex: 1234" value="{{$data_tanya->id_profil}}" required>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul Pertanyaan</label>
                        <input type="text" name="judul" class="form-control" value="{{$data_tanya->judul}}" placeholder="ex: Cara menggunakan Laravel" required>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Pertanyaan</label>
                        <textarea name="isi" class="form-control" placeholder="ex: Saya ingin mengetahui ..." required  cols="30" rows="5">{{$data_tanya->isi}}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    </div>
@endsection