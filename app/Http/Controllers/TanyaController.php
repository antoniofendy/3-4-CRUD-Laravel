<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\TanyaModel;

class TanyaController extends Controller
{
    public function index(){

        $data_tanya = TanyaModel::getAll();

        return view('pertanyaan.index', ['data_tanya'=>$data_tanya]);
    }

    public function create(){
        return view('pertanyaan.create');
    }

    public function store(Request $request){
        date_default_timezone_set('Asia/Jakarta');

        $isi = $request->all();
        $time = date('Y-m-d H:i:s');
        unset($isi['_token']);
        $isi['jml_jawaban'] = 0;
        $isi['tanggal_dibuat'] = $time;
        $isi['tanggal_diperbaharui'] = $time;
        
        $buat = TanyaModel::insert($isi);
        return view('pertanyaan.store', ['buat'=>$buat]);
    }
}
