@extends('layouts.adminbase')

@section('title','Edit home:'.$data->title)

@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Edit Home:{{$data->title}} </h1>
            </div>
            <!--End Page Header -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Home Elements
                        </div>

                        <form role="form" action="{{route('admin.home.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="panel-body">

                            <div class="form-group">
                                <label >Parent Category</label>

                                <select class="form-control select2" name="category_id" style="height: 40px">
                                    @foreach($datalist as $rs )
                                        <option value="{{$rs->id}}" @if($rs->id ==$data->category_id) selected="selected" @endif >
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
                                        <label>Minimum Price</label>
                                        <input type="number" class="form-control" name="min_price" value="{{$data->min_price}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Maximum Price</label>
                                        <input type="number" class="form-control" name="max_price" value="{{$data->max_price}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Dwelling type</label>
                                        <input type="text" class="form-control" name="dwelling_type" placeholder="dwelling_type" value="{{$data->dwelling_type}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Number of rooms</label>
                                        <input type="number" class="form-control" name="num_of_rooms" value="{{$data->num_of_rooms}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Warming type</label>
                                        <input type="text" class="form-control" name="warming_type" placeholder="warming_type" value="{{$data->warming_type}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Province</label>
                                        <input type="text" class="form-control" name="province" placeholder="province" value="{{$data->province}}">
                                    </div>
                                    <div class="form-group">
                                        <label>District</label>
                                        <input type="text" class="form-control" name="district" placeholder="district" value="{{$data->district}}" >
                                    </div>

                                    <div class="form-group">
                                        <label>Building age</label>
                                        <input type="number" class="form-control" name="building_age" value="{{$data->building_age}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Floor location</label>
                                        <input type="number" class="form-control" name="floor_location" value="{{$data->floor_location}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Detail Information</label>
                                        <textarea class="form-control" name="detail">
                                         {{$data->detail}}
                                        </textarea>
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
                                            <option selected {{$data->status}}</option>
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
