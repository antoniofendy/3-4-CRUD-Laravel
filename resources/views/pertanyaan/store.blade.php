@extends('adminlte.master')

@section('title', 'Tabel Pertanyaan')

@section('konten')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{$ket}} Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                @if ($info == true)
                    <div class="alert alert-primary" role="alert">
                        Berhasil {{$ket}} Pertanyaan
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        Gagal {{$ket}} Pertanyaan!
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    </div>
    <meta http-equiv="refresh" content="1;URL='{{url('/')}}'" />  
@endsection