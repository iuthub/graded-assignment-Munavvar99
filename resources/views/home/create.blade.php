@extends('layouts.app')
@section('content')

<script>
    function setCurrency(val) {
        var priceTotal = $("#amount").val() + ' ' + $("#currency").val();
        $("input[type='hidden'][id='postPrice']").val(priceTotal);
        console.log(priceTotal);
    }
    $(document).ready(function () {
        $("#amount").keyup(function () {
            var priceTotal = $("#amount").val() + ' ' + $("#currency").val();
            $("input[type='hidden'][id='postPrice']").val(priceTotal);
            console.log(priceTotal);
        });
        var regExTitle = new RegExp(/.{5,}/);
        var regExDescription = new RegExp(/.{10,}/);
        var regExPrice = new RegExp(/^[0-9]+(\.[0-9]{1,2})?$/);
        $("input[id='title']").keyup(function () {
            var str = $(this).val();
            if(!regExTitle.test(str))
            {
                console.log('Less');
                $(this).removeClass("form-group").addClass("form-group is-invalid");
            }else{
                $(this).removeClass("form-group is-invalid").addClass("form-group");
            }
        });
        $("input[id='amount']").keyup(function () {
            var str = $(this).val();
            if(str!=''){
            if(!regExPrice.test(str))
            {
                console.log('Less');
                $(this).removeClass("form-group").addClass("form-group is-invalid");
            }else{
                $(this).removeClass("form-group is-invalid").addClass("form-group");
            }
            }
        });
        $("textarea[id='description']").keyup(function () {
            var str = $(this).val();
            console.log('desc');
            if(!regExDescription.test(str))
            {
                console.log('Less');
                $(this).removeClass("form-control").addClass("form-control is-invalid");
            }else{
                $(this).removeClass("form-control is-invalid").addClass("form-control");
            }
        });
        //Below trick is from w3Schools. https://www.w3schools.com/bootstrap4/bootstrap_forms_custom.asp
        $(".custom-file-input").on("change",function(){
            console.log('Fileeee');
            var name = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(name);
        });
    });
</script>
<section id="services" class="bg-light">
    <div class="container section-gaping">

        <nav aria-label="breadcrumb" class="nav-route">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Your profile</a></li>
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Your ads</a></li>
                <li class="breadcrumb-item active" aria-current="page">New ad</li>
            </ol>
        </nav>
        <div class="row" id="text-head">
            <h2 class="text-head">Post your advertisement to <span class="text-reg">melon</span></h2>
            <hr>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body col-8">
                        <div class="card-title">
                            <form method="POST" action="{{ route('home.create') }}" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Title (min 5)</label>
                                    
                                    
                                    <input type="text" name="title" class="form-control" id="title"
                                        placeholder="Title of the ad" data-toggle="popover" data-placement="right">
                                        
                                    </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category" id="category"
                                        placeholder="Choose category">
                                        <option selected disabled>Choose...</option>
                                        <option value="electronics">Electronics</option>
                                        <option value="home-real-estate">Home Real Estate</option>
                                        <option value="clothes">Clothes</option>
                                        <option value="jobs">Jobs</option>
                                        <option value="vehicles">Vehicles</option>
                                        <option value="services">Services</option>
                                        <option value="vacancies">Vacancies</option>
                                        <option value="furniture">Furniture</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea type="text" class="form-control" id="description" rows="3"
                                        name="description"></textarea>
                                </div>
                                <div class="form-group row" id="priceDiv">
                                    <div class="col-xs-3">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control is-invalid" id="amount" name="amount" >
                                    </div>
                                    <div class="col-xs-4">
                                        <label for="currency"></label>
                                        <select class="form-control" name="currency" id="currency" onchange="setCurrency(this)">
                                            <option>UZS</option>
                                            <option>USD</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="price" id='postPrice' value="">                             
                                </div>
                                <div class="form-group">
                                    <legend for="formGroupExampleInput4">Upload some photos</legend>
                                    <div class="col-4">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file1" name="file1">
                                            <label class="custom-file-label" for="customFileLangHTML"
                                                data-browse="photo">Browse</label>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file2" name="file2">
                                            <label class="custom-file-label selected" for="customFileLangHTML"
                                                data-browse="photo">Browse</label>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file3" name="file3">
                                            <label class="custom-file-label" for="customFileLangHTML"
                                                data-browse="photo">Browse</label>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file4" name="file4">
                                            <label class="custom-file-label" for="customFileLangHTML"
                                                data-browse="photo">Browse</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">POST</button>
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection