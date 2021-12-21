@php
    
    
@endphp


@extends('layouts.defaultLayouts')

@section('title-page',"comics")

@section('main_content')
<main>
    <div class="main_container">
        <h2>CURRENT SERIES</h2>
      
      @foreach ($comics as $comic)
        <a href="{{ route('comicDetails',['id'=>$loop->index]) }}" class="singleComic_container">
          <div><img src={{ $comic["thumb"] }} alt={{ $comic["title"] }} /></div>
          <h5>{{ $comic["title"] }}</h5>
        </a>
      @endforeach

      <button>LOAD MORE</button>
    </div>
  </main>
@endsection