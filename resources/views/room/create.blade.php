@extends('layout')
@section('content')
              <!-- Begin Page Content -->
              <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3" style="background-color:#1b1f34;" >
        <h6 class="m-0 font-weight-bold text-primary">Add Room
       
        <div class="float-right">
                                <a href="{{url('admin/rooms')}}" ><button    style="background-color: transparent;" class="button_slide slide_down"> VIEW  ALL</button></a>
                                </div>
        </h6>
    </div>
    <div class="card-body" style="background-color:#1b1f34;">
        @if(Session::has('success'))
         <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <form action="{{url('admin/rooms')}}" method="post">
                @csrf
            <table class="table table-bordered" >
                <tr>
                    <th>Select Room Type</th>
                    <td >
                        <select  style="background-color:#1b1f34;" name="rt_id" class="form-control">
                            <option value="o">--- Select ---</option>
                            @foreach($roomtypes as $rt)
                            <option  value="{{$rt->id}}">{{$rt->title}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                
                <tr >
                    <th>Title</th>
                    <td ><input style="background-color:#1b1f34;" type="text" name="title" class="form-control"></td>
                </tr>
                <tr>
                    <td colsapn="2">
                    <button type="submit" style="background-color: transparent;" class="button_slide slide_down">S U B M I T</button>
                        
                    </td>
                </tr>

            </table>
            </form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@section('script')
 <!-- Custom styles for this page -->
 <link href="http://localhost:8000/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="http://localhost:8000/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost:8000/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="http://localhost:8000/js/demo/datatables-demo.js"></script>
    @endsection
@endsection