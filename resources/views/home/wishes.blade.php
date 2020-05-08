@extends('layouts.app')
@section('content')
<header></header>
<section id="services" class="bg-light">

        <div class="container section-gaping"> 
          <div class="row">
           
    
            <div class="col-lg-8 mx-auto">
                
                <h2 class="">Liked products</h2>
                <p>here you can know what you were looking for</p>
                @foreach ($posts as $post)
                @foreach($likes as $like)
                @if($post->id == $like->post_id)      
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
                @endif
                @continue
                 
                  @endforeach
                  @endforeach
            
    
                 
    
    
            </div>
          </div>
        </div>
      </section>
@endsection