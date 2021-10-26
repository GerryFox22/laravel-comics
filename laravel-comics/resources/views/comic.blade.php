@extends("layouts.main")

@section("title", "Comic")

@section("contenuto")

    <div id="comic-container">
        <div class="comic-img">
            <img src="{{ $comic['thumb'] }}" alt="">
        </div>
        <div class="comic-info">
            <div class="comic-presentation">
                <h1 class="comic-title">{{ $comic['title'] }}</h1>
                <div class="avaiable">
                    <div class="price">
                        <span>U.S. Price <strong>{{ $comic['price'] }}</strong></span>
                        <span class="avv">AVAIABLE</span>
                    </div>
                    <div class="check">
                        <span><strong>Check Availability</strong></span>
                    </div>
                </div>
                <div class="description">
                    <p class="description-text">{{ $comic['description'] }}</p>
                </div>
            </div>
            <div class="rewards">
                <h5>ADVERTISEMENT</h5>
                <img src="/images/adv.jpg" alt="rewards-img">
            </div>
        </div>


    </div>
    
@endsection