<div class="col-md-3" id="products">
    <!-- Rotating card -->
    <div class="card-wrapper">
        <div id="card-2" class="card card-rotating text-center">

            <!--Front Side-->
            <div class="face front" id="face">

                <!-- Image-->
                <div class="view overlay">
                    <img id="image-card" class="card-img-top" src="{{ $link }}" alt="Example photo">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Content-->
                <div class="card-body">
                    <h4 class="">{{ $post->title }}</h4>
                    <p class="card-text">{{ $post->description }} </p>
                    <p>{{ $post->price }}</p>
                    <a class="link-text">
                        <a dialogimage="{{ $link }}" dialogPrice="{{ $post->price }}" dialogDesc="{{ $post->description }}" dialogtitle="{{ $post->title }}" class="opendialog" style="background: transparent; border:0;"  data-toggle="modal" data-target="#exampleModalPopovers">Read more <i class="fas fa-angle-double-right"></i></a>
                    </a>
                </div>

            </div>
            <!--Front Side-->

       </div>
    </div>
    <!-- Rotating card -->
</div>
@include('admin.reader')

@section('js')
<script>
    $(document).ready(function(){
        $('.opendialog').click(function(){
            $('#dialog-image')[0].src = $(this)[0].attributes.dialogimage.value;
            $('.dialog-title')[0].innerHTML = $(this)[0].attributes.dialogtitle.value;
            $('.dialog-content')[0].innerHTML = $(this)[0].attributes.dialogDesc.value;
            $('.dialog-price')[0].innerHTML = $(this)[0].attributes.dialogPrice.value;
        });
    });
</script>
@endsection
