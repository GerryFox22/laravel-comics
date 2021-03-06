<footer>
    <div class="footer-nav">
        <div class="footer-nav-elements">
            <div class="nav-menu">
                <div class="footer-nav-column">
                    <h3>DC COMICS</h3>
                    <ul>
                        @foreach ($links as $link)
                            <li>
                                <a href="{{ $link['route']}}">{{ $link["text"] }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <h3>SHOP</h3>
                    <ul>
                        @foreach ($shop as $singleshop)
                            <li>
                                <a href="{{ $singleshop['route']}}">{{ $singleshop["text"] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="footer-nav-column">
                    <h3>DC</h3>
                    <ul>
                        @foreach ($dc as $singledc)
                            <li>
                                <a href="{{ $singledc['route']}}">{{ $singledc["text"] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="footer-nav-column">
                    <h3>SITES</h3>
                    <ul>
                        @foreach ($sites as $site)
                            <li>
                                <a href="{{ $site['route']}}">{{ $site["text"] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>

            <div class="footer-dc-logo">
            
            </div>

        </div>
    </div>

    <div class="footer-socials">
        <div class="footer-socials-container">
            <div class="follow-button">
                <button>SIGN-UP NOW!</button>
            </div>

            <div class="socials-dc">
                <h3>FOLLOW US</h3>
                @foreach ($socials as $social)
                    <a href="{{ $social['url'] }}">
                        <img src="{{ $social['src'] }}" alt="{{ $social['alt'] }}">
                    </a>
                @endforeach
            </div>
        </div>
        
    </div>

</footer>