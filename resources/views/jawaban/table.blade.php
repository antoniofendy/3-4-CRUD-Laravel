@extends('adminlte.master')

@section('title', 'Tabel Jawaban')

@section('konten')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Jawaban</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID Pertanyaan</th>
            <th>ID Penjawab</th>
            <th>Jawaban</th>
            <th>Tanggal dibuat</th>
            <th>Tanggal diperbaharui</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data_jawab as $data)
            <tr>
                <td>{{$data->id_pertanyaan}}</td>
                <td>{{$data->id_profil}}</td>
                <td>
                    <?php
                        $isi = substr($data->isi, 0, 30);
                        $isi = substr($data->isi, 0, strrpos($isi, " "));
                        echo $isi. " ... ";
                    ?>
                </td>
                <td>{{$data->tanggal_dibuat}}</td>
                <td>{{$data->tanggal_diperbaharui}}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>ID Pertanyaan</th>
            <th>ID Penjawab</th>
            <th>Jawaban</th>
            <th>Tanggal dibuat</th>
            <th>Tanggal diperbaharui</th>
        </tr>
        </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
    </div>
@endsection

@push('script')
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        });
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
    });
</script>
@endpush