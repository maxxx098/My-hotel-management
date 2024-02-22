@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update Service
                            <div class="float-right">
                                <a href="{{url('admin/service')}}" ><button    style="background-color: transparent;" class="button_slide slide_down"> ADD  NEW</button></a>
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
                                <form method="post" enctype="multipart/form-data" action="{{url('admin/service/'.$data->id)}}">
                                    @csrf
                                    @method('put')
                                    <table class="table table-bordered" >
                                        <tr>
                                            <th>Title <span class="text-danger">*</span></th>
                                            <td><input value="{{$data->title}}" name="title" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Small Desc <span class="text-danger">*</span></th>
                                            <td><textarea name="small_desc" class="form-control">{{$data->small_desc}}</textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Detail Desc <span class="text-danger">*</span></th>
                                            <td><textarea name="detail_desc" class="form-control">{{$data->detail_desc}}</textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Photo</th>
                                            <td>
                                                <input name="photo" type="file" />
                                                <input type="hidden" name="prev_photo" value="{{$data->photo}}" />
                                                <img width="100" src="{{asset($data->photo)}}" />
                                            </td>
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