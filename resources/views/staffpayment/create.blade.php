@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="background-color:#1b1f34; "> 
                        <div class="card-header py-3" style="background-color:#1b1f34; ">
                            <h6 class="m-0 font-weight-bold text-primary">Add Staff Payment
                            <div class="float-right">
                                <a href="{{url('admin/staff')}}" ><button    style="background-color: transparent;" class="button_slide slide_down"> VIEW  ALL</button></a>
                                </div>
       
                        </div>
                        <div class="card-body">
                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
                            <div class="table-responsive">
                                <form method="post" action="{{url('admin/staff/payment/'.$staff_id)}}">
                                    @csrf
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Amount</th>
                                            <td><input name="amount" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <td><input name="amount_date" class="form-control" type="date" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
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

@endsection