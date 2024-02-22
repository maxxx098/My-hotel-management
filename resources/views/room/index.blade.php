@extends('layout')
@section('content')
             <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="background-color:#1b1f34; ">
                        <div class="card-header py-3" style="background-color:#1b1f34; ">
                            <h6 class="m-0 font-weight-bold text-primary">Rooms
                               
                                <div class="float-right">
                                <a href="{{url('admin/rooms/create')}}" ><button    style="background-color: transparent;" class="button_slide slide_down"> ADD  MORE</button></a>
                                </div>
                            </h6>
                        </div>
                        <div class="card-body">
                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>RoomType</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>RoomType</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @if($data)
                                            @foreach($data as $d)
                                            <tr>
                                                <td>{{$d->id}}</td>
                                                <td>{{$d->title}}</td>
                                                <td>{{$d->title}}</td>
                                                <td>
                                                    <a href="{{url('admin/rooms/'.$d->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                    <a href="{{url('admin/rooms/'.$d->id).'/edit'}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('admin/rooms/'.$d->id).'/delete'}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                
<!-- /.container-fluid -->
@section('script')
 <!-- Custom styles for this page -->
 <link href="{{asset('../myasset/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="{{asset('../myasset/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../myasset/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('../myasset/js/demo/datatables-demo.js')}}"></script>
    @endsection
@endsection