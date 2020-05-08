@extends('layouts.app')

@section('content')
<div class="container section-gaping">
        <section id="about">
  
                <div class="container">
                  <div class="row">
                    <h1 class="text-center">Posts/Advertisements</h1>
                  </div>
                  @if (Session::has('postinfo'))
                  <div class="alert alert-success" role="alert">
                        {{Session::get('postinfo')}}
                  </div>      
                  @endif
                  @if(Session::has('deleteinfo'))
                  <div class="alert alert-danger">
                        {{Session::get('deleteinfo')}}
                  </div>
                  @endif
                <div class="box-panel">
                    <div class="row">
                     @foreach( $posts as $post )
                      <div class="card box"style="width:210px">
                        <img class="card-img-top" src="/storage/files/{{$post->photos->first()->url}}" alt="Card image" style="width:100%">
                        <div class="card-body card-content ">
                          <h4 class="card-title">{{ $post->title }}<span id="value-product"><i class="fas fa-check-circle"></i></span></h4>
                          <p class="card-text">{{  Str::limit($post->description, 70, ' (...)') }}</p>
                          <p class="card-text"><span>{{$post->price}}</span></p>
                          <a href="{{route('home.delete',['id'=>$post->id])}}" class="btn btn-danger">Delete</a><i class="fas fa-cart-plus icons"></i>
                        </div>
                      </div>
                        @endforeach
                    </div>
                  </div>
              </section>

</div>
@endsection
