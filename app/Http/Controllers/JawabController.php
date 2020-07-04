<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\JawabModel;
use \App\Models\TanyaModel;

class JawabController extends Controller
{
    public function table(){

        $data_jawab = JawabModel::getAll();
        return view('jawaban.table', ['data_jawab' => $data_jawab]);

    }

    public function index($id_pertanyaan){
        $tanya = TanyaModel::show($id_pertanyaan);
        $jawab = JawabModel::getAllAnswer($id_pertanyaan);
        return view('jawaban.index', ['pertanyaan' => $tanya, 'jawab' => $jawab]);
    }

    public function jawab(){
        $tanya = TanyaModel::getAll();
        return view('jawaban.jawab', ['tanya'=>$tanya]);
    }   

    public function berijawaban($id_pertanyaan){
        $tanya = TanyaModel::show($id_pertanyaan);
        return view('jawaban.berijawaban', ['tanya'=>$tanya]);
    }

    public function store(Request $request){

        $isi = $request->all();
        unset($isi['_token']);

        $jawaban = JawabModel::giveAnswer($isi);

        return view('jawaban.store', ['info'=>$jawaban, 'ket'=>'Memberikan']);

        
    }

}
