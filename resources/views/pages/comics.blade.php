


@extends('layouts.defaultLayouts')

@section('title-page',"comics")

@section('main_content')
<main>
    <img src= {{  asset("img/jumbotron.jpg") }}  alt="" />
    <div class="main_container">
        <h2>CURRENT SERIES</h2>
      
      @foreach ($comics as $comic)
        <div class="singleComic_container">
          <div><img src={{ $comic["thumb"] }} alt={{ $comic["title"] }} /></div>
          <h5>{{ $comic["title"] }}</h5>
        </div>
      @endforeach

      <button>LOAD MORE</button>
    </div>
  </main>
@endsection