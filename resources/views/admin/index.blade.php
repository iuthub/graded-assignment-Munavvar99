@extends('layouts.admin')
@section('styles')
    <style>
        .product-container{
            margin-top: 5%;
        }
        #products{
            padding:3%;
        }
    </style>
@endsection
    
@section('content')
    <div class="product-container">
        <div class="row">
            @foreach($posts as $post)
                <?php $link = '/storage/files/'.$post->photos->first()->url;
                      $title = $post->title;
                      $desc = $post->description;
                      $price = $post->price;
                ?>
                @include('admin.item')
            @endforeach
        </div>
    </div>
@endsection
