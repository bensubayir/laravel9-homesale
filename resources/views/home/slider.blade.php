


<div class="col-md-6 animated fadeIn">

    <div class="owl-carousel header-carousel">
        @foreach($sliderdata as $rs)
        <div class="owl-carousel-item">
            <img src="{{Storage::url($rs->image)}}" alt="">

        </div>

        <div class="owl-carousel-item">
            <img src="{{Storage::url($rs->image)}}" alt="">

        </div>
        @endforeach
    </div>

</div>



