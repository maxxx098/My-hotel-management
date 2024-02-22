@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid" >


<!-- DataTales Example -->
<div class="card shadow mb-4"  style="background-color:#1b1f34;">
    <div class="card-header py-3"  style="background-color:#1b1f34;">
        <h6 class="m-0 font-weight-bold text-primary">Add RoomTypes
        <div class="float-right">
                                <a href="{{url('admin/roomtype')}}" ><button    style="background-color: transparent;" class="button_slide slide_down"> VIEW  ALL</button></a>
                                </div>
        </h6>
        
        </h6>
    </div>
    <div class="card-body" >
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
        @endforeach
    @endif

        @if(Session::has('success'))
          <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive"  >
            <form action="{{url('admin/roomtype')}}" method="post" enctype="multipart/form-data"  style="background-color:#1b1f34; border: 1px solid #1b1f34;">
                @csrf
                <table class="table table-bordered"  style="background-color:#1b1f34; border: 1px solid #1b1f34;">
                    <tr >
                        <th>Title</th>
                        <td><input type="text" name="title" class="form-control"  style="background-color:#1b1f34; "></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input type="text" name="price" class="form-control"  style="background-color:#1b1f34;"></td>
                    </tr>
                    <tr>
                        <th>Detail</th>
                        <td><textarea name="detail" id="" cols="30" rows="10" class="form-control" style="background-color:#1b1f34;"></textarea></td>
                    </tr>

                    <tr>
                        <th>Gallery</th>
                        <td><input type="file" multiple name="images[]"  style="background-color:#1b1f34;"/></td>
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