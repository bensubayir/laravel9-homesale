@extends('layouts.adminwindow')

@section('title','Home Image Gallery ')

@section('content')

    <h3>{{$home->title}}</h3>
    <hr>
    <form role="form" action="{{route('admin.image.store',['hid'=>$home->id])}}" method="post" enctype="multipart/form-data">
        @csrf

            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text " class="form-control" name="title" placeholder="Title">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label " for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <input class="input-group-text" type="submit" value="Upload">

                    </div>
                    </div>


                </div>
            </div>
        </div>
    </form>
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">

                Home Image List
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th> Id </th>
                            <th> Title </th>
                            <th>Image</th>
                            <th style="width: 40px">Delete</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" style="height: 40px ">
                                    @endif
                                </td>
                                <td> <a href="{{route('admin.image.destroy',['hid'=>$home->id,'id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Deleting !! Are you sure ?')" >Delete</a></td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Kitchen Sink -->




@endsection
