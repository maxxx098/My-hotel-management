@extends('layout')
@section('content')

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4" style="background-color:#1b1f34; ">
    <div class="card-header py-3" style="background-color:#1b1f34; ">
        <h6 class="m-0 font-weight-bold text-primary">All Bookings
        <div class="float-right">
                                <a href="{{url('admin/booking/create')}}" ><button    style="background-color: transparent;" class="button_slide slide_down"> ADD  NEW</button></a>
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
                        <th>Customer</th>
                        <th>Room No.</th>
                        <!-- <th>Room Type</th> -->
                        <th>CheckIn Date</th>
                        <th>CheckOut Date</th>
                        <th>Ref</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Room No.</th>
                        <!-- <th>Room Type</th> -->
                        <th>CheckIn Date</th>
                        <th>CheckOut Date</th>
                        <th>Ref</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($data as $booking)
                    <tr>
                        <td>{{$booking->id}}</td>
                        <td>{{$booking->customer->full_name}}</td>
                        <td>{{$booking->room->title}}</td>
                        <td>{{$booking->checkin_date}}</td>
                        <td>{{$booking->checkout_date}}</td>
                        <td>{{$booking->ref}}</td>
                        <td><a href="{{url('admin/booking/'.$booking->id.'/delete')}}" class="text-danger" onclick="return confirm('Are you sure you want to delete this data?')"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
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