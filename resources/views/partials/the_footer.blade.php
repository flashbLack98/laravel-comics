@php
    
    $linkBlue = [
        [
            "img"=>  asset('img/buy-comics-digital-comics.png'),
            "title"=> "DIGITAL COMICS",
        ],
        [
            "img"=>  asset('img/buy-comics-merchandise.png'),
            "title"=> "DC MERCHANDISE",
        ],
        [
            "img"=>  asset('img/buy-comics-subscriptions.png'),
            "title"=> "SUBSCRIPTION",
        ],
        [
            "img"=>  asset('img/buy-comics-shop-locator.png'),
            "title"=> "COMIC SHOP LOCATOR",
        ],
        [
            "img"=>  asset('img/buy-dc-power-visa.svg'),
            "title"=> "DC POWER VISA",
        ],
    ]
@endphp
    
<footer>
    <div class="background_blue">
        <div class="container_item">
            @foreach ($linkBlue as $item)
                <div class="item">
                    <div>
                        <img src={{ $item["img"]}} alt={{ $item["title"] }} />
                    </div>
                    <h5>{{ $item["title"] }}</h5>
                </div>  
            @endforeach
        </div>
    </div>

    <div class="background_superheros">
        <div class="container_linkDClogo">
        <div class="container_link">
            <div class="link_item">
            <h4>DC COMICS</h4>
            <ul>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
            </ul>
            <h4>DC COMICS</h4>
            <ul>
                <li>characters</li>
                <li>characters</li>
            </ul>
            </div>
            <div class="link_item">
            <h4>DC COMICS</h4>
            <ul>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
            </ul>
            </div>
            <div class="link_item">
            <h4>DC COMICS</h4>
            <ul>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
                <li>characters</li>
            </ul>
            </div>
        </div>
        <img src={{ asset('img/dc-logo-bg.png') }} alt="" />
        </div>
    </div>
    <div class="background_social">
        <div class="social_container">
        <button>SIGN-UP NOW</button>

        <ul>
            <li><h4>FOLLOW US</h4></li>
            <li><img src= {{ asset('img/footer-facebook.png') }} alt="" /></li>
            <li><img src={{ asset('img/footer-twitter.png') }} alt="" /></li>
            <li><img src={{ asset('img/footer-youtube.png') }} alt="" /></li>
            <li><img src={{ asset('img/footer-pinterest.png') }} alt="" /></li>
            <li><img src={{ asset('img/footer-periscope.png') }} alt="" /></li>
        </ul>
        </div>
    </div>
</footer>   
