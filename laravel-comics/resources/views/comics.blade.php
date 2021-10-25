@extends("layouts.main")

@section("title", "Comics")

@section("contenuto")
    @include (['comics' => config('comics')])
    <main>
        <div class="jumbo">
            <img src="public/jumbotron.jpg" alt="">
            <div class="jumbo-elements">
                <h2>CURRENT SERIES</h2>

                <div class="comics-cards-container">
                    @foreach ($comics as $comic)
                        <div class="comics-single-card">
                            <div class="image-container">
                                <img src="image" alt="series">
                            </div>
                            <p>{{ $comic["title"] }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="load-button-container">
                    <button class="load-button">LOAD MORE</button>
                </div>
                    
            </div>
        </div>
    </main>
@endsection