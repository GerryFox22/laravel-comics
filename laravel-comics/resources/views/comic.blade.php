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

        <div class="talent-specs">
            <div class="talent">
                <h4>Talent</h4>
                <div class="row">
                    <span>Art By:</span>
        
                    <span class="right-element"></span>
                </div>
                <div class="row">
                    <span>Written By:</span>
        
                    <span class="right-element"></span>
                </div>
            </div>
            <div class="specs">
                <h4>Specs</h4>
                <div class="row">
                    <span>Series:</span>
        
                    <span class="right-element">{{ $comic['series'] }}</span>
                </div>
                <div class="row">
                    <span>U.S. Price:</span>
        
                    <span class="right-element">{{ $comic['price'] }}</span>
                </div>
                <div class="row">
                    <span>On Sale Date:</span>
        
                    <span class="right-element">{{ $comic['sale_date'] }}</span>
                </div>
            </div>
        </div>
    </div>
    
@endsection