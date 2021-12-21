@extends('layouts.defaultLayouts')

@section('title-page',"Comic details ")

@section('main_content')


<div class="barBlue"></div>
<main class="main_details">
    <img class="comic_img" src={{ $comic['thumb'] }} alt="">
    <div class='details_container'>
        <div class="text_details">
            <h3 class="comic_title">{{$comic['title']}}</h3>
            <div class="available_container">

                <div class="lable_container">
                    <p>U.S. Price : {{ $comic['price']}}</p> 
                    <p>AVAILABLE</p>
                </div>
                <div class="dropdown">
                    <p>check availability</p>
                </div>
            </div>

            <p>{{ $comic['description']}}</p>
                

        </div>
        <img src={{ asset('img/adv.jpg') }} alt="">
    </div>
</main>
@endsection
