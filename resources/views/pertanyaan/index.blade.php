@extends('adminlte.master')

@section('title', 'Tabel Pertanyaan')

@section('konten')

<a href="{{url('/pertanyaan/create')}}"><button type="button" class="btn btn-primary mb-2">Tambah Data</button></a>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <ul class="list-group">
        @foreach ($data_tanya as $data)
            <li class="list-group-item d-flex justify-content-between align-items-center mb-2">
                {{$data->judul}}
                <a href="{{url('/pertanyaan/'. $data->id_pertanyaan)}}" class="badge badge-pill badge-info">Detail
                </a>
            </li>
        @endforeach
    </ul>
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