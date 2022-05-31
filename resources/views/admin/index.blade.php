@extends('layouts.adminbase')

@section('title','Category list')

@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header"> </h1>
                <a href="{{route('admin.category.create')}} " class="btn btn-primary" style="width: 200px">Add Category</a>


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


                </div>
            </div>
        </div>
        <!-- End  Kitchen Sink -->

    </div>
    <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

@endsection
