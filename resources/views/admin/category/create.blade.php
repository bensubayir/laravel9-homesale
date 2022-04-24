@extends('layouts.adminbase')

@section('title','Add Category')

@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Add Category </h1>
            </div>
            <!--End Page Header -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Category Elements
                        </div>
                        <form role="form"action="/admin/category/store" method="post">
                            @csrf

                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Keywords</label>
                                            <input class="form-control" name="keywords" placeholder="Keywords">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" name="description" placeholder="Description">
                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <input class="file" name="Image" placeholder="Choose image File">
                                        </div>



                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-success">Reset Button</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
    </div>
    </div>



    </div>
    <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
@endsection