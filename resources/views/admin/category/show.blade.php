@extends('layouts.adminbase')

@section('title','Show Category:'.$data->title)

@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Show Category:{{$data->title}} </h1>
                <a href="/admin/category/edit/{{$data->id}} "class="btn btn-primary" style="width: 200px">Edit</a>
                <a href="/admin/category/destroy/{{$data->id}}" onclick="return confirm('Deleting !! Are you sure ?') "class="btn btn-danger" style="width: 200px">Delete</a>

            </div>
            <!--End Page Header -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Detail Data
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
                                <th>Created Data</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Update Data</th>
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
