@extends('adminlte.master')

@section('title', 'Beri Jawaban')

@section('konten')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Beri Jawaban</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                @if ($jawaban == true)
                    <div class="alert alert-primary" role="alert">
                        Berhasil Memberikan Jawaban
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        Gagal Memberikan Jawaban
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    </div>
    <meta http-equiv="refresh" content="1;URL='{{url('/')}}'" />    
@endsection