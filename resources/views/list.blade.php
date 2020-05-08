@extends('layouts.app')
@section('content')

<header class=" text-white filters">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
        <div class="card card-body">

        </div>
    </div>
    <div class="container text-center">
        <h1 class="text">{{ config('app.name','melon') }}</h1>
        <p class="lead">Find anything, sell anything</p>
        <div>
            <div class="form-group">
                <input type="text" name="title" id="title" class="form-control input-lg" placeholder="Search">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div id="searchResults">
                    
                   
                </div>   
            </div>
        </div>
        {{ csrf_field() }}
        <div class="category"></div>

        <div class="row item">
          <a href="" class="col item-1">
            <div class="item-group pointer"> 
              <h6><i class="fa fa-cloud"></i> Electronics</h6> 
            </div>
          </a>
            <a href="{{route('home.category','garden')}}" class="col item-1">
                <div class="item-group pointer">
                
                  <h6><i class="fa fa-cloud"></i> Garden</h6>

                </div>
            </a>
        
        <a href="{{route('home.category','clothes')}}" class="col item-1">
            <div class="item-group pointer">
              <h6>  <i class="fas fa-tshirt"></i> Clothes </h6>
            </div>
        </a>
        <a href="{{route('home.category','services')}}" class="col item-1">
            <div class="item-group pointer"> 
              <h6><i class="fas fa-concierge-bell"></i> Services </h6>
            </div>
        </a>
        
    </div>
        <div class="row item">
            <a href="{{route('home.category','children')}}" class="col item-1">
                <div class="item-group pointer">
                <h6><i class="fas fa-child"></i> Children</h6> 
              </div>
            </a>
           
            <a href="{{route('home.category','homeRealEstate')}}" class="col item-1">
                <div class="item-group pointer">
                
                  <h6><i class="fas fa-home"></i> Home Real Estate</h6>
              </div>
            </a>
            <a href="{{route('home.category','fashion')}}" class="col item-1">
                <div class="item-group pointer">
                 
                  <h6> <i class="fas fa-tshirt"></i> Fashion </h6>
              </div>
            </a>
            <a href="{{route('home.category','cars')}}" class="col item-1">
                <div class="item-group pointer">
                 
                  <h5> <i class="fas fa-car"></i>  Cars </h5>
              </div>
            </a>
          </div>

    </div>
    </div>
</header>

<section id="services" class="bg-light">

    <div class="container"> 
      <div class="row">
        <div class="col">
          <div class="panel-col" style="backgound:blue; margin-top:16%;">
            <figure class="figure">
                <img src="https://scontent-arn2-2.xx.fbcdn.net/v/t1.0-9/20479841_1880984015561754_5620100286034227693_n.jpg?_nc_cat=107&_nc_ht=scontent-arn2-2.xx&oh=70f1bf89fb3ca9155b17ff6cb9470c28&oe=5D2EBA93" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption">get it right now!</figcaption>
              </figure>
        </div>
      </div>

        <div class="col-lg-8 mx-auto">

            <h2 class="">Top Advertisement</h2><br>
            
          <div class="card mb-3 boxing" style="max-width: 740px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="http://cdn.motorpage.ru/Photos/800/184.jpg" class="card-img img-product" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Nexia<span id="value-product-list">1,200,000 so'm</span></h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted"><i class="fas fa-thumbtack"></i>Mirzo Ulugbek rg, Olimlar street</small><small><i style="color:burlywood; padding-left: 10%;" class="fas fa-history"></i>Time: 29/02/2019</small><span class="like" style="float:right; font-size:15pt;"><i id="like-heart" class="far fa-heart"></i></span></p>
                </div>
              </div>
            </div>
          </div> 

         

          

             


        </div>
      </div>
    </div>
  </section>

@endsection