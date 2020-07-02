@extends('adminlte.master')

@section('title', 'Tabel Pertanyaan')

@section('konten')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Judul</th>
            <th>ID Penanya</th>
            <th>Tanggal dibuat</th>
            <th>Tanggal diperbaharui</th>
            <th>Jawaban</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data_tanya as $data)
            <tr>
                <td><a href="{{url('/jawaban/'.$data->id_pertanyaan)}}">{{$data->judul}}</a></td>
                <td>{{$data->id_profil}}</td>
                <td>{{$data->tanggal_dibuat}}</td>
                <td>{{$data->tanggal_diperbaharui}}</td>
                <td>{{$data->jml_jawaban}}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>Judul</th>
            <th>ID Penanya</th>
            <th>Tanggal dibuat</th>
            <th>Tanggal diperbaharui</th>
            <th>Jawaban</th>
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