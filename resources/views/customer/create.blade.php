@extends('layout')
@section('content')
<style>
    
</style>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="background-color:#1b1f34; ">
                        <div class="card-header py-3" style="background-color:#1b1f34; ">
                            <h6 class="m-0 font-weight-bold text-primary">Add Customer
                            <div class="float-right">
                                <a href="{{url('admin/customer')}}" ><button    style="background-color: transparent;" class="button_slide slide_down"> VIEW  ALL</button></a>
                                </div>
        </h6>
                               
                            </h6>
                        </div>
                        <div class="card-body">
                        {!! csrf_field() !!}
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <p class="text-danger">{{$error}}</p>
                                @endforeach
                            @endif

                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
                            <div class="table-responsive">
                                <form method="post" enctype="multipart/form-data" action="{{url('admin/customer')}}">
                                    @csrf
                                    <table class="table table-bordered" >
                                        <tr>
                                            <th>Full Name <span class="text-danger">*</span></th>
                                            <td><input style="background-color:#1b1f34; " name="full_name" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Email <span class="text-danger">*</span></th>
                                            <td><input style="background-color:#1b1f34; " name="email" type="email" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Password <span class="text-danger">*</span></th>
                                            <td><input style="background-color:#1b1f34; " name="password" type="password" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Mobile <span class="text-danger">*</span></th>
                                            <td><input style="background-color:#1b1f34; " name="mobile" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Photo</th>
                                            <td><input style="background-color:#1b1f34; " name="photo" multiple type="file" id="photo" /></td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td><textarea style="background-color:#1b1f34; " name="address" class="form-control"></textarea></td>
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