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

                        <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="panel-body">

                            <div class="form-group">
                                <label >Parent Category</label>

                                <select class="form-control select2" name="parent_id" style="height: 40px">
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach($datalist as $rs )
                                        <option value="{{$rs->id}}" @if($rs->id ==$data->parent_id) selected="selected" @endif >
                                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
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
                                        <label for="exampleInputFile">Image </label>
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image">
                                                <label class="form-control custom-file-label" for="exampleInputFile">Choose image file</label>

                                            </div>

                                    </div>



                                    <div class="form-group">
                                        <label>Status </label>
                                        <select class="form-control" name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option> False </option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Data</button>

                                </div>


                    </div>

            </div>

        </div>
                </form>
        <!-- End Form Elements -->
    </div>
    </div>
    </div>



    </div>
    <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
@endsection
