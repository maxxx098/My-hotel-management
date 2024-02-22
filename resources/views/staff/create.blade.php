@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="background-color:#1b1f34; ">
                        <div class="card-header py-3" style="background-color:#1b1f34; ">
                            <h6 class="m-0 font-weight-bold text-primary">Add Staff
                            <div class="float-right">
                                <a href="{{url('admin/staff')}}" ><button    style="background-color: transparent;" class="button_slide slide_down"> VIEW  ALL</button></a>
                                </div>
       
                                
                            </h6>
                        </div>
                        <div class="card-body">
                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
                            <div class="table-responsive">
                                <form enctype="multipart/form-data" method="post" action="{{url('admin/staff')}}">
                                    @csrf
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Full Name</th>
                                            <td><input style="background-color:#1b1f34; " name="full_name" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Select Department</th>
                                            <td>
                                                <select style="background-color:#1b1f34; " name="department_id" class="form-control">
                                                    <option value="0">--- Select ---</option>
                                                    @foreach($departs as $dp)
                                                    <option value="{{$dp->id}}">{{$dp->title}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Photo</th>
                                            <td><input style="background-color:#1b1f34; " name="photo" multiple type="file" id="photo" /></td>
                                        </tr>
                                        <tr>
                                            <th>Bio</th>
                                            <td><textarea style="background-color:#1b1f34; " class="form-control" name="bio"></textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Salary Type</th>
                                            <td>
                                                <input type="radio" name="salary_type" value="daily"> Daily
                                                <input type="radio" name="salary_type" value="monthly"> Monthly
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Salary Amount</th>
                                            <td><input style="background-color:#1b1f34; " name="salary_amt" class="form-control" type="number" /></td>
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