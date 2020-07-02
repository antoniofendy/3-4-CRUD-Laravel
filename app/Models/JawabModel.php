<?php

    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class JawabModel{

        public static function getAll(){
            
            $data_jawab = DB::table('tb_jawaban')->get();
            return $data_jawab;

        }

        public static function getAllAnswer($id_pertanyaan){

            $getAnswer = DB::select(DB::raw("SELECT *FROM tb_jawaban WHERE id_pertanyaan=" . $id_pertanyaan));
            return $getAnswer;
        }
        
    }

?>