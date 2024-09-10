@php

$header_links = [
    ["text" => "CHARACTERS", "name" => "characters"],
    ["text" => "COMICS", "name" => "comics"],
    ["text" => "MOVIES", "name" => "movies"],
    ["text" => "TV", "name" => "tv"],
    ["text" => "GAMES", "name" => "games"],
    ["text" => "COLLECTIBLES", "name" => "collectibles"],
    ["text" => "VIDEOS", "name" => "videos"],
    ["text" => "FANS", "name" => "fans"],
    ["text" => "NEWS", "name" => "news"],
    ["text" => "SHOP", "name" => "shop"],
];


@endphp

<header>

    <div class="container">
        <div class="logo">
            <img src="/img/dc-logo.png" alt="logo header">
        </div>
        
        <div class="menu">
            <ul>
                @foreach ($header_links as $item)
                    <li><a href="">{{ $item['text'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

</header>