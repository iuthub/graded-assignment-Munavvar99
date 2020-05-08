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

<section id="services" class="bg-light">

    <div class="container"> 
      <div class="row">
        <div class="col">
          <div class="panel-col" style="backgound:blue; margin-top:16%;">
            <figure class="figure">
                <a href="https://allplay.uz/"><img src="https://scontent-arn2-2.xx.fbcdn.net/v/t1.0-9/20479841_1880984015561754_5620100286034227693_n.jpg?_nc_cat=107&_nc_ht=scontent-arn2-2.xx&oh=70f1bf89fb3ca9155b17ff6cb9470c28&oe=5D2EBA93" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."></a>
                <figcaption class="figure-caption">get it right now!</figcaption>
              </figure>
        </div>
      </div>

        <div class="col-lg-8 mx-auto">

          <h2 class="">Posts/Advertisements</h2><br>
          @foreach ($posts as $post)
            <div class="card mb-3 boxing" style="max-width: 740px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <a href="{{route('post.get',['id'=>$post->id])}}"><img src="/storage/files/{{$post->photos->first()->url  }}" class="card-img img-product" alt="...">
                  </a></div>
                <div class="col-md-8">
                  <div class="card-body">
                    <a href="{{route('post.get',['id'=>$post->id])}}">
                      <h5 class="card-title">
                      {{$post->title}}
                      <span id="value-product-list">
                        {{$post->price}}
                      </span>
                    </h5></a>
                     <p class="card-text">
                      {{Str::limit($post->description, 150, ' (...)')}}
                    </p>
                  <p class="card-text"><small class="text-muted"><i class="fas fa-thumbtack"></i> Posted by:{{$post->user->name}}</small><small><i style="color:burlywood; padding-left: 10%;" class="fas fa-history"></i> Time: {{$post->created_at}}</small><span class="like" style="float:right; font-size:15pt;"><a href="{{route('post.like',['id'=>$post->id])}}"><i id="like-heart" class="far fa-heart"></i></a></span></p>
                  </div>
                </div>
              </div>
            </div> 
            @endforeach
        </div>
      </div>
    </div>
  </section>

@endsection