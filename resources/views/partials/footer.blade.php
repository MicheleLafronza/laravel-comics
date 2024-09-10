@php

$footer_top_links = [
    ["text" => "DIGITAL COMICS", "image" => "/img/buy-comics-digital-comics.png"],
    ["text" => "DC MERCHANDISE", "image" => "/img/buy-comics-merchandise.png"],
    ["text" => "SUBSCRIPTION", "image" => "/img/buy-comics-subscriptions.png"],
    ["text" => "COMIC SHOP LOCATOR", "image" => "/img/buy-comics-shop-locator.png"],
    ["text" => "DC POWER VISA", "image" => "/img/buy-dc-power-visa.svg"],
];

$comicsLinks = [
    ["text" => "Characters"],
    ["text" => "Comics"],
    ["text" => "Movies"],
    ["text" => "TV"],
    ["text" => "Games"],
    ["text" => "Videos"],
    ["text" => "News"],
];

$shopLinks = [
    ["text" => "Shop DC"],
    ["text" => "Shop DC Collectibles"],
];

$DCLinks = [
    ["text" => "Term of use"],
    ["text" => "Privacy Policy"],
    ["text" => "Ad Choiches"],
    ["text" => "Advertising"],
    ["text" => "Jobs"],
    ["text" => "Subrscriptions"],
    ["text" => "Talent Workshops"],
    ["text" => "CPSC Certificates"],
    ["text" => "Ratings"],
    ["text" => "Shop Help"],
    ["text" => "Contact Us"],
];

$siteLinks = [
    ["text" => "DC"],
    ["text" => "MAD Magazine"],
    ["text" => "DC Kids"],
    ["text" => "DC Universe"],
    ["text" => "DC PowerVisa"],
];

$footerLinks = [
    ["url" => "/img/footer-facebook.png"],
    ["url" => "/img/footer-twitter.png"],
    ["url" => "/img/footer-youtube.png"],
    ["url" => "/img/footer-pinterest.png"],
    ["url" => "/img/footer-periscope.png"],
];





@endphp

<div class="footer-top">

    <div class="container">
        <ul>
            @foreach ($footer_top_links as $item)
            <li>
                <img class="link-img" src="{{ $item['image'] }}" alt="">
                <a href="">
                    {{ $item['text'] }}
                </a>
            </li>
            @endforeach    
        </ul>
    </div>
 
</div>

<div class="footer-mid">

    <div class="container">

        <div class="links">

            <div class="links-sections">
                <span class="list-title">
                    DC COMICS
                </span>
                <ul>
                    @foreach ($comicsLinks as $item)
                        <li>{{$item['text'] }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="links-sections">
                <span class="list-title">
                    SHOP
                </span>
                <ul>
                    @foreach ($shopLinks as $item)
                        <li>{{$item['text'] }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="links-sections">
                <span class="list-title">
                    DC
                </span>
                <ul>
                    @foreach ($DCLinks as $item)
                        <li>{{$item['text'] }}</li>
                    @endforeach
                </ul>
            </div>
            
            <div class="links-sections">
                <span class="list-title">
                    SITES
                </span>
                <ul>
                    @foreach ($siteLinks as $item)
                        <li>{{$item['text'] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="bg-logo">
            <img src="img/dc-logo-bg.png" alt="">
        </div>

    </div>

</div>

<div class="footer-bottom">

    <div class="container">

        <div class="sign-up">
            <a href="">
                SIGN-UP NOW!
            </a>
        </div>

        <div class="links-container">
            <a class="link-text" href="">FOLLOW US</a>
            @foreach($footerLinks as $item)
            <a class="link-icons" href="#">
                <img src="{{ $item['url'] }}" alt="">
            </a>
            @endforeach
        </div>

    </div>

</div>


