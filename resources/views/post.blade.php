@extends('layouts.app')
@section('content')
<section id="services" class="bg-light">
        <div class="container">
              <nav aria-label="breadcrumb" class="nav-route">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home page</a></li>
                  <li class="breadcrumb-item"><a href="{{route('category',['category'=>$post->category])}}">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">product view</li>
                  </ol>
                </nav>
          
          <div class="row">
    
            <div class="col-8">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                      
                      @foreach ($post->photos as $photo)
                      <div class="carousel-item{{$loop->index==0 ? ' active':''}}">
                      <img src="/storage/files/{{$photo->url}}"  class="foto-block d-block"
                            alt="photos">
                        </div><!--w-100-->
                        @endforeach
                                              
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon as" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                      <span class="carousel-control-next-icon as" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
           
    
            <div class="product-detail">
              <h2>{{$post->title}}</h2>
                <hr>
                <p class="lead">{{$post->description}}</p>
              </div>
            </div>
    
              <div class="col-4">
                  
                  <ul class="list-group">
                  <li class="list-group-items text-center">{{$post->price}}</li>
                    </ul>
              <div class="card">
                <div class="card-body">
                  <img class="card-img-top" src="/storage/files/{{$firstPhoto}}" alt="">
                </div>
                <div class="card-title title-panel">
                    <p><i class="fas fa-user"></i> Posted by: <span>{{$post->user->name}}</span></p>
                </div>
                <div class="card-title title-panel">
                <p><i class="fas fa-address-book"></i> Contact Number: <span>{{$post->user->phone}}</span></p>
                </div>
                <div class="card-title title-panel">
                    <p><i class="fas fa-envelope"></i> Contact email: <span>{{$post->user->email}}</span></p>
                </div>
                         
              </div>
              </div>
          </div>
        </div>
      </section>
@endsection