<?php

    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class TanyaModel{

        public static function getAll(){
            
            $data_tanya = DB::table('tb_pertanyaan')->orderBy('jml_jawaban', 'desc')->get();
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

        public static function update($data){

            $update =  DB::table('tb_pertanyaan')->where('id_pertanyaan', $data['id_pertanyaan'])
            ->update(
                [
                    'id_profil' => $data['id_profil'],
                    'judul' => $data['judul'],
                    'isi' => $data['isi'],
                    'tanggal_diperbaharui' => date('Y-m-d H:i:s')
                ]
            );
            return $update;
        }

        public static function delete($id_pertanyaan){
            $delete = DB::table('tb_pertanyaan')->where('id_pertanyaan', $id_pertanyaan)
            ->delete();

            return $delete;
        }
        
    }


?>