@extends('layouts.app')
@section('content')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {
        var timeout;
        $('#title').keyup(function () {
            var key = $(this).val();
            $('#searchForm').attr('action',`/search/${key}`);
            console.log($('#searchForm').attr('action'));
            if (key != '') {
                var _token = $('input[name="_token"]').val();
                if (timeout) {
                    clearTimeout(timeout);
                }
                timeout = setTimeout(() => {
                    $.ajax({
                        url: `/api/search/${key}`,
                        method: "GET",
                        dataType: "json",
                        data: {
                            _token: _token
                        },
                        success: function (data) {
                            //console.log(data[0]);
                            $('#searchResults').fadeIn();
                            var res = '<ul>';
                            for (var i = 0; i < data.length; i++) {
                                res +=`<a href="/post/${data[i].id}">${data[i].title}</a><br>`
                            }
                            res += '</ul>';
                            console.log(res);
                            //Used jQuery's docs for the line below line. http://api.jquery.com/html/
                            $('#searchResults').html(res);
                        }
                    });
                }, 500);
            }
        });
        

    })
</script>
    @include('partials.header')
<section id="about">
  
  <div class="container">
    <div class="row">
      <h1 class="text-center">Posts/Advertisements</h1>
    </div>
 
    <div class="box-panel">
      <div class="row">
       @foreach( $posts as $post )
        <div class="card box"style="width:210px">
          <img class="card-img-top" src="/storage/files/{{$post->photos->first()->url}}" alt="Card image" style="width:100%">
          <div class="card-body card-content ">
            <h4 class="card-title">{{ $post->title }}<span id="value-product"><i class="fas fa-check-circle"></i></span></h4>
            <p class="card-text">{{  Str::limit($post->description, 100,' (...)') }}</p>
            <p class="card-text"><span>{{$post->price}}</span></p>
            <a href="{{route('post.get',['id'=>$post->id])}}" class="btn btn-primary">View Product</a><i class="fas fa-cart-plus icons"></i>
          </div>
           
        </div>
          @endforeach
      </div>
    </div>
</section>

<section id="services" class="bg-light">
    <div class="container text-center">
        <h1 class="ad-banner">Some relevant Photos</h1>
    </div>
    <div class="bd-example ">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://www.raincloudmagic.com/wp-content/uploads/2011/09/propsheader-1000x300.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Storm Rain Cloud Server!</h5>
                        <p>ap into highly customizable cloud computing capacity and scale up or down based on real-time demands, and enjoy the flexibility of securing VMs on a yearly subscription or pay on demand. Now you can focus on your business priorities and free yourself from procuring expensive IT infrastructure and hiring large network teams</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.catbirdnyc.com/media/catalog/category/2018_Categories-Fragrance2-1000x300.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Get it today with 50% off Sale!</h5>
                        <p>Light Blue Perfume by Dolce & Gabbana, Light Blue is an aroma anchored in flower notes and fruity aromas, perfect for women looking to freshen their scent and arouse the apple of their eye. </p>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="{{asset('img/ads.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Would you like to Create your own Ads! harry up!</h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</section>
@endsection