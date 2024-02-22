@extends('layout')
@section('content')
              <!-- Begin Page Content -->
              <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">RoomTypes</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4" style="background-color:#1b1f34; ">
    <div class="card-header py-3" style="background-color:#1b1f34; ">
        <h6 class="m-0 font-weight-bold text-primary">RoomTypes
        <div class="float-right">
                                <a href="{{url('admin/roomtype/create')}}" ><button    style="background-color: transparent;" class="button_slide slide_down"> ADD  NEW</button></a>
                                </div>
        </h6>
          
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
                        <th>Id</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Gallery Image</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tfoot>
                <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Gallery Image</th>
                        <th>Action</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    @if($data)
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->title}}</td>
                        <td>{{$d->price}}</td>
                        <td>{{count($d->roomtypeimgs)}}</td>
                        
                        <td>
                            <a href="{{url('admin/roomtype/' .$d->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{url('admin/roomtype/' .$d->id. '/edit')}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                            <a onclick="confirm('are you sure to delete this data')" href="{{url('admin/roomtype/' .$d->id. '/delete')}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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