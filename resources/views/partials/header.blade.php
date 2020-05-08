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
          <a href="{{route('category',['category'=>'electronics'])}}" class="col item-1">
             <div class="item-group pointer">
                <h6><i class="fa fa-cloud"></i> Electronics</h6>
             </div>
          </a>
          <a href="{{route('category',['category'=>'vacancies'])}}" class="col item-1">
             <div class="item-group pointer">
                <h6><i class="fas fa-scroll"></i></i> Vacancies</h6>
             </div>
          </a>
          <a href="{{route('category',['category'=>'clothes'])}}" class="col item-1">
             <div class="item-group pointer">
                <h6>  <i class="fas fa-tshirt"></i> Clothes </h6>
             </div>
          </a>
          <a href="{{route('category',['category'=>'services'])}}" class="col item-1">
             <div class="item-group pointer">
                <h6><i class="fas fa-wrench"></i></i> Services </h6>
             </div>
          </a>
       </div>
       <div class="row item">
          <a href="{{route('category',['category'=>'children'])}}" class="col item-1">
             <div class="item-group pointer">
                <h6><i class="fas fa-child"></i> Children</h6>
             </div>
          </a>
          <a href="{{route('category',['category'=>'home-real-estate'])}}" class="col item-1">
             <div class="item-group pointer">
                <h6><i class="fas fa-home"></i> Home Real Estate</h6>
             </div>
          </a>
          <a href="{{route('category',['category'=>'jobs'])}}" class="col item-1">
             <div class="item-group pointer">
                <h6> <i class="fas fa-tshirt"></i> Jobs </h6>
             </div>
          </a>
          <a href="{{route('category',['category'=>'vehicles'])}}" class="col item-1">
             <div class="item-group pointer">
                <h6> <i class="fas fa-car"></i>  Vehicles </h6>
             </div>
          </a>
       </div>
    </div>
    </div>
 </header>
 