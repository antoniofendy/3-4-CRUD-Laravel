<?php

    function tgl_indonesia($tgl){
        $tanggal = substr($tgl, 8,2);
        $nama_bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $bulan = $nama_bulan[(substr($tgl, 5,2)-1)];
        $tahun = substr($tgl, 0,4);

        return ($tanggal." ".$bulan." ".$tahun);
    }

?>

@extends('adminlte.master')

@section('title', 'Detail Pertanyaan')

@section('konten')

<div class="card bg-gradient-warning">
    <h5 class="card-header text-bold">{{$data_tanya->judul}}</h5>
    <div class="card-body">
        <h5 class="card-title text-bold">Dari : {{$data_tanya->id_profil}}</h5>
        <p class="card-text">{{$data_tanya->isi}}</p>
        <hr>
        <p class="card-text text-bold">Detail : 
            <ul>
                <li style="list-style: none;"><b>Tanggal dibuat:</b> {{tgl_indonesia($data_tanya->tanggal_dibuat)}}</li>
                <li style="list-style: none;"><b>Tanggal diperbaharui:</b> {{tgl_indonesia($data_tanya->tanggal_diperbaharui)}}</li>
                <li style="list-style: none;"><b>Jumlah jawaban:</b> {{$data_tanya->jml_jawaban}}</li>
            </ul>
        </p>
        <a href="{{url('/pertanyaan/'. $data_tanya->id_pertanyaan. "/edit")}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
        <form method="post" action="{{url('/pertanyaan/'.$data_tanya->id_pertanyaan)}}" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
        </form>
    </div>

    <div class="container jwb">
        @foreach ($all_answer as $item)
            <div class="card text-white bg-info">
                <div class="card-header">
                    <h3 class="card-title">Jawaban dari : {{$item->id_profil}}</h3>
                </div>
                <div class="card-body">
                    {!!$item->isi!!}
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection