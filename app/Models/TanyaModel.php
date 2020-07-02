<?php

    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class TanyaModel{

        public static function getAll(){
            
            $data_tanya = DB::table('tb_pertanyaan')->get();
            return $data_tanya;

        }

        public static function show($id_pertanyaan){

            $show = DB::table('tb_pertanyaan')->where('id_pertanyaan', $id_pertanyaan)->first();
            return $show;

        }

        public static function insert($data){
            $buat = DB::table('tb_pertanyaan')->insert($data);
            return $buat;
        }
        
    }


?>