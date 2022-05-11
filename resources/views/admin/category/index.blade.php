@extends('layouts.adminbase')

@section('title','Category List')

@section('content')

        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Category List </h1>
                </div>
                <!--End Page Header -->
            </div>
            <!--   Kitchen Sink -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Category List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> Id </th>
                                <th> Title </th>
                                <th>Keywords</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th style="width: 40px">Edit</th>
                                <th style="width: 40px">Delete</th>
                                <th style="width: 40px">show</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->keywords}}</td>
                                <td>{{$rs->description}}</td>
                                <td>{{$rs->image}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="/admin/category/edit/{{$rs->id}}"class="btn btn-primary btn-sm">Edit</a></td>
                                <td><a href="/admin/category/delete/{{$rs->id}}"class="btn btn-danger btn-sm">Delete</a></td>
                                <td><a href="/admin/category/show/{{$rs->id}}"class="btn btn-success btn-sm">Show</a></td>
                            </tr>

                             @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End  Kitchen Sink -->

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

@endsection
