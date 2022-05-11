@extends('layouts.adminbase')

@section('title','Edit Category:'.$data->title)

@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Edit Category:{{$data->title}} </h1>
            </div>
            <!--End Page Header -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Category Elements
                        </div>

                        <form role="form" action="/admin/category/update/{{$data->id}}" method="post">
                            @csrf
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-lg-6">


                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" name="title" value="{{$data->title}}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input class="form-control" name="keywords" value="{{$data->keywords}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" name="description" value="{{$data->description}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image upload</label>
                                        <div class="input-group col-xs-12">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input">
                                                <label class="form-control custom-file-label" for="exampleInputFile"> Upload Image</label>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Data</button>

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
