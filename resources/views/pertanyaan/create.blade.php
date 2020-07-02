@extends('adminlte.master')

@section('title', 'Tabel Pertanyaan')

@section('konten')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Buat Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <form method="post" action="{{url('/pertanyaan')}}">
                    @csrf
                    <div class="form-group">
                        <label for="id_profil">Id Profil</label>
                        <input type="text" name="id_profil" class="form-control" placeholder="ex: 1234" required>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul Pertanyaan</label>
                        <input type="text" name="judul" class="form-control" placeholder="ex: Cara menggunakan Laravel" required>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Pertanyaan</label>
                        <textarea name="isi" class="form-control" placeholder="ex: Saya ingin mengetahui ..." required  cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Buat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    </div>
@endsection