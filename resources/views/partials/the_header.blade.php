@php
 $navbarItems = [
        [
          "title" => "CHARCTERS",
          "href" => "#",
        ],
        [
          "title" => "COMICS",
          "href" => "comics",
        ],
        [
          "title" => "MOVIES",
          "href" => "#",
        ],
        [
          "title" => "TV",
          "href" => "#",
        ],
        [
          "title" => "GAMES",
          "href" => "#",
        ],
        [
          "title" => "COLLECTIBLES",
          "href" => "#",
        ],
        [
          "title" => "VIDEO",
          "href" => "#",
        ],
        [
          "title" => "FANS",
          "href" => "#",
        ],
        [
          "title" => "NEWS",
          "href" => "#",
        ],
        [
          "title" => "SHOP",
          "href" => "#",
        ],
      ]    
@endphp

<header>
    <div class="container_header">
        <img src={{ asset('img/dc-logo.png') }} alt="logo DC">
        <ul>
            @foreach ($navbarItems as $item)
                
                <li><a class="list-unstyled" href={{ $item['href'] }} >{{ $item["title"] }}</a></li>
            @endforeach
        </ul>
    </div>



</header>