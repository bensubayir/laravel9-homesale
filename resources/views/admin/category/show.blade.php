@extends('layouts.adminbase')

@section('title','Show Category:'.$data->title)

@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Detail Data:{{$data->title}}</h1>
                <a href="{{route('admin.category.edit',['id'=>$data->id])}} "class="btn btn-primary" style="width: 200px">Edit</a>
                <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure ?') "class="btn btn-danger" style="width: 200px">Delete</a>

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
                                <th>Title</th>
                                <td>{{$data->title}}</td>
                            </tr>
                            <tr>
                                <th>Keywords</th>
                                <td>{{$data->keywords}}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td></td>
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
