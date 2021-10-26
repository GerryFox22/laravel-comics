@extends("layouts.main")

@section("title", "Comics")

@section("contenuto")
 
    <main>
        <div class="jumbo">
            <img src="images/jumbotron.jpg" alt="">
            <div class="jumbo-elements">
                <h2>CURRENT SERIES</h2>

                <div class="comics-cards-container">
                    @foreach ($comics as $comic)
                        <div class="comics-single-card">
                            <a href="{{ route('comic', ['id' => $loop->index] ) }}">
                                <div class="image-container">
                                    <img src="{{ $comic['thumb'] }}" alt="series">
                                </div>
                                <p>{{ $comic["title"] }}</p>
                            </a>
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