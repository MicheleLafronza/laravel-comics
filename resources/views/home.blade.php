{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')

<main>

    <div>
        <img class="jumbo" src="/img/jumbotron.jpg" alt="">
    </div>


    <div class="container card-grid">
        
        <button id="current-series-button">CURRENT SERIES</button>

        @foreach ($comics as $item)
        <div class="item">
            <div>
                <img src="{{ $item['thumb'] }}" alt="">
            </div>
        
            <div class="title">
                {{ $item['title'] }}
            </div>
        </div>
        @endforeach
        
    </div>

    <div class="container">
        <button>LOAD MORE</button>
    </div>

</main>

@endsection

