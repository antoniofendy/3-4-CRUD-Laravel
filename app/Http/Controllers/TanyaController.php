<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\TanyaModel;
use \App\Models\JawabModel;

class TanyaController extends Controller
{
    public function index(){

        $data_tanya = TanyaModel::getAll();

        return view('pertanyaan.index', ['data_tanya'=>$data_tanya]);
    }

    public function show($id_pertanyaan){
        $allAnswer = JawabModel::getAllAnswer($id_pertanyaan);
        $data_tanya = TanyaModel::show($id_pertanyaan);
        return view('pertanyaan.show', ['data_tanya'=>$data_tanya, 'all_answer'=>$allAnswer]);
    }

    public function create(){
        return view('pertanyaan.create');
    }

    public function store(Request $request){
        $isi = $request->all();
        unset($isi['_token']);

        $buat = TanyaModel::insert($isi);
        return view('pertanyaan.store', ['info'=>$buat, 'ket'=>'Buat']);
    }

    public function edit($id_pertanyaan){
        $data_tanya = TanyaModel::show($id_pertanyaan);
        return view('pertanyaan.edit', compact("data_tanya"));
    }

    public function update($id_pertanyaan, Request $request){
        $update =  TanyaModel::update($request->all());
        return view('pertanyaan.store', ['info' => $update, 'ket'=>'Edit']);
    }   

    public function delete($id_pertanyaan){
        $delete = TanyaModel::delete($id_pertanyaan);
        return view('pertanyaan.store', ['info' => $delete, 'ket'=>'Hapus']);
    }
}
