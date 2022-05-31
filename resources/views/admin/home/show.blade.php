@extends('layouts.adminbase')

@section('title','Show Home:'.$data->title)

@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Detail Data:{{$data->title}}</h1>
                <a href="{{route('admin.home.edit',['id'=>$data->id])}} "class="btn btn-primary" style="width: 200px">Edit</a>
                <a href="{{route('admin.home.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure ?') "class="btn btn-danger" style="width: 200px">Delete</a>

            </div>
            <!--End Page Header -->
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">

                            <tr>
                                <th>Id</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}

                                </td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{$data->title}}</td>
                            </tr>
                            <tr>
                                <th>Keywords</th>
                                <td>{{$data->keywords}}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{$data->description}}</td>
                            </tr>
                            <tr>
                                <th>Minimum Price</th>
                                <td>{{$data->min_price}}</td>
                            </tr>
                            <tr>
                            <th>Maximum Price</th>
                            <td>{{$data->max_price}}</td>
                            </tr>
                            <tr>
                                <th>Dwelling Type</th>
                                <td>{{$data->dwelling_type}}</td>
                            </tr>
                            <tr>
                                <th>Number of rooms</th>
                                <td>{{$data->num_of_rooms}}</td>
                            </tr>
                            <tr>
                                <th>Warming Type</th>
                                <td>{{$data->warming_type}}</td>
                            </tr>
                            <tr>
                                <th>Province</th>
                                <td>{{$data->province}}</td>
                            </tr>
                            <tr>
                                <th>District</th>
                                <td>{{$data->district}}</td>
                            </tr>
                            <tr>
                                <th>Building Age</th>
                                <td>{{$data->building_age}}</td>
                            </tr>
                            <tr>
                                <th>Floor Location</th>
                                <td>{{$data->floor_location}}</td>
                            </tr>
                            <tr>
                                <th>Detail</th>
                                <td>{{$data->detail}}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td> @if($data->image)
                                        <img src="{{Storage::url($data->image)}}" style="height: 100px ">
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th>Created Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Update Date</th>
                                <td>{{$data->Updated_at}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>



    </div>
    <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
@endsection
