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
                        <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
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
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group col-xs-12">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" name="image">
                                                <label class="form-control custom-file-label" for="exampleInputFile">Choose image file </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="save "> Save</button>

                                </div>
                            </div>
                        </div>
                    </form>
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
