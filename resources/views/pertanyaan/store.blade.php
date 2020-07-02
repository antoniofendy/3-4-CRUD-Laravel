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
                @if ($buat == true)
                    <div class="alert alert-primary" role="alert">
                        Berhasil Buat Pertanyaan
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        Gagal Buat Pertanyaan!
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    </div>
@endsection