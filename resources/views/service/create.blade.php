@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="background-color:#1b1f34; ">
                        <div class="card-header py-3" style="background-color:#1b1f34; ">
                            <h6 class="m-0 font-weight-bold text-primary">Add Service
                            <div class="float-right">
                                <a href="{{url('admin/service')}}" ><button    style="background-color: transparent;" class="button_slide slide_down"> VIEW  ALL</button></a>
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
                                <form method="post" enctype="multipart/form-data" action="{{url('admin/service')}}">
                                    @csrf
                                    <table class="table table-bordered" >
                                        <tr>
                                            <th>Title <span class="text-danger">*</span></th>
                                            <td><input style="background-color:#1b1f34; " name="title" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Small Desc <span class="text-danger">*</span></th>
                                            <td><textarea style="background-color:#1b1f34; " name="small_desc" class="form-control"></textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Detail Desc <span class="text-danger">*</span></th>
                                            <td><textarea style="background-color:#1b1f34; " name="detail_desc" class="form-control"></textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Photo <span class="text-danger">*</span></th>
                                            <td><input style="background-color:#1b1f34; " name="photo" multiple type="file" /></td>
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