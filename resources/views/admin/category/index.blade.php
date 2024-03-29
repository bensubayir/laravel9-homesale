@extends('layouts.adminbase')

@section('title','Category List')

@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header"> </h1>
                <a href="{{route('admin.category.create')}} "class="btn btn-primary" style="width: 200px">Add Category</a>


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
                            <th>Parent</th>
                            <th> Title </th>
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
                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" style="height: 40px ">
                                    @endif
                                </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}} "class="btn btn-primary btn-sm">Edit</a></td>
                                <td> <a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Deleting !! Are you sure ?')" >Delete</a></td>
                                <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}"class="btn btn-success btn-sm">Show</a></td>
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

