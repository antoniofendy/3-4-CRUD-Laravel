<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\TanyaModel;

class HomeController extends Controller
{
    public function index(){
        $tanya = TanyaModel::getAll();
        return view('adminlte.home', ['tanya'=>$tanya]);
    }
}
