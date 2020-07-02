@extends('adminlte.master')

@section('title', 'Jawaban')

@section('konten')
    <div class="card text-white bg-warning">
        <div class="card-header">
            <h3 class="card-title">{{$pertanyaan->judul}} - {{$pertanyaan->id_profil}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            {{$pertanyaan->isi}}
        </div>
        <!-- /.card-body -->
    </div>

    @foreach ($jawab as $item)
        <div class="card text-right text-white bg-info">
            <div class="card-header">
                <h3 class="card-title">Jawaban dari : {{$item->id_profil}}</h3>
            </div>
            <div class="card-body">
                {{$item->isi}}
            </div>
        </div>
    @endforeach

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