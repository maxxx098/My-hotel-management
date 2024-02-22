@extends('layout')
@section('content')
              <!-- Begin Page Content -->
              <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4"  style="background-color:#1b1f34; ">
    <div class="card-header py-3"  style="background-color:#1b1f34; ">
        <h6 class="m-0 font-weight-bold text-primary">Edit RoomTypes
        <div class="float-right">
                                <a href="{{url('admin/roomtype')}}" ><button    style="background-color: transparent;" class="button_slide slide_down"> VIEW  ALL</button></a>
                                </div>
        </h6>
       
        </h6>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
         <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <form enctype="multipart/form-data" action="{{url('admin/roomtype/'.$data->id)}}" method="post">
                @csrf
               @method('put')
                <table class="table table-bordered" >
                <tr>
                   <th>Title</th>
                   <td><input style="background-color:#1b1f34; " type="text" value="{{$data->title}}" name="title" class="form-control"></td>
                </tr>
                <tr>
                   <th>Price</th>
                   <td><input  style="background-color:#1b1f34; " type="text" value="{{$data->price}}" name="price" class="form-control"></td>
                </tr>
                <tr>
                    <th>Detail</th>
                    <td><textarea  style="background-color:#1b1f34; " name="detail" value="{{$data->detail}}" id="" cols="30" rows="10" class="form-control">
                        {{$data->detail}}
                    </textarea></td>
                </tr>
                <tr>
                                            <th>Gallery Images</th>
                                            <td>
                                                <table class="table table-bordered mt-3">
                                                    <tr>
                                                        <input  type="file" multiple name="images[]"  /> 
                                                        @foreach($data->roomtypeimgs as $image)
                                                    <td class="imgcol{{$image->id}}">
                                                        <div id="button">
                                                        <img id="button" width="150" src="{{asset($image->img_src)}}" />
                                                        </div>
<p class="mt-2  " id="button">
    <button type="button"  onclick="return confirm('Are you sure you want to delete this image??')" class="btn btn-danger btn-sm delete-image" data-image-id="{{$image->id}}"><i class="fa fa-trash"></i></button>

</p>
                                                        </td>
                                                    @endforeach
                                                        
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                    
                <tr>
                    <td colspan="2">
                        
                        
                        <button Value="Update" type="submit"  role="button" style="background-color: transparent;" class="button_slide slide_down">U P D A T E</button>
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
    <script type="text/javascript">
    $(document).ready(function(){
        $(".delete-image").on('click',function(){
            var _img_id=$(this).attr('data-image-id');
            var _vm=$(this);
            $.ajax({
                url:"{{url('admin/roomtypeimage/delete')}}/"+_img_id,
                dataType:'json',
                beforeSend:function(){
                    _vm.addClass('disabled');
                },
                success:function(res){
                    if(res.bool==true){
                        $(".imgcol"+_img_id).remove();
                    }
                    _vm.removeClass('disabled');
                }
            });
        });
    });
</script>
    @endsection
@endsection