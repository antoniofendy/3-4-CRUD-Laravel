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

        public static function giveAnswer($answer){
            $time = date('Y-m-d H:i:s');
            $answer['tanggal_dibuat'] = $time;
            $answer['tanggal_diperbaharui'] = $time;

            $jawab = DB::table('tb_jawaban')->insert($answer);
            
            //menambahkan jumlah jawaban pada pertanyaan
            DB::table('tb_pertanyaan')
            ->where('id_pertanyaan', $answer['id_pertanyaan'])
            ->increment('jml_jawaban', 1);

            return $jawab;

        }
        
    }

?>