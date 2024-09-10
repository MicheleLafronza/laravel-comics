@php

$footer_top_links = [
    ["text" => "DIGITAL COMICS", "image" => "/img/buy-comics-digital-comics.png"],
    ["text" => "DC MERCHANDISE", "image" => "/img/buy-comics-merchandise.png"],
    ["text" => "SUBSCRIPTION", "image" => "/img/buy-comics-subscriptions.png"],
    ["text" => "COMIC SHOP LOCATOR", "image" => "/img/buy-comics-shop-locator.png"],
    ["text" => "DC POWER VISA", "image" => "/img/buy-dc-power-visa.svg"],
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

</div>

<div class="footer-bottom">

</div>


