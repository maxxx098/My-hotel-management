@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="background-color:#1b1f34; ">
                        <div class="card-header py-3" style="background-color:#1b1f34; ">
                            <h6 class="m-0 font-weight-bold text-primary">Update Customer
                            <div class="float-right">
                                <a href="{{url('admin/customer')}}" ><button    style="background-color: transparent;" class="button_slide slide_down"> VIEW  ALL</button></a>
                                </div>

                              
                            </h6>
                        </div>
                        <div class="card-body">

                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <p class="text-danger">{{$error}}</p>
                                @endforeach
                            @endif

                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
                            <div class="table-responsive">
                                <form method="post" enctype="multipart/form-data" action="{{url('admin/customer/'.$data->id)}}">
                                    @csrf
                                    @method('put')
                                    <table class="table table-bordered" >
                                        <tr>
                                            <th>Full Name <span class="text-danger">*</span></th>
                                            <td><input style="background-color:#1b1f34; " value="{{$data->full_name}}" name="full_name" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Email <span class="text-danger">*</span></th>
                                            <td><input style="background-color:#1b1f34; " value="{{$data->email}}" name="email" type="email" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Mobile <span class="text-danger">*</span></th>
                                            <td><input style="background-color:#1b1f34; " value="{{$data->mobile}}" name="mobile" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Password <span class="text-danger">*</span></th>
                                            <td><input style="background-color:#1b1f34; " value="{{$data->password}}" name="password" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Photo</th>
                                            <td>
                                                <input style="background-color:#1b1f34; " name="photo" type="file" />
                                                <input style="background-color:#1b1f34; " type="hidden" name="prev_photo" value="{{$data->photo}}" />
                                                <img  width="100" src="{{asset($data->photo)}}" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td><textarea style="background-color:#1b1f34; " name="address" class="form-control">{{$data->address}}</textarea></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                            <button type="submit" style="background-color: transparent;" class="button_slide slide_down">U P D A T E</button>
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