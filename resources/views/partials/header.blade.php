
@php
    
    $navItem = [
        [
            "text"=>"Characters"
        ],
        [
            "text"=>"Comics"
        ],
        [
            "text"=>"Movies"
        ],
        [
            "text"=>"Tv"
        ],
        [
            "text"=>"Games"
        ],
        [
            "text"=>"Collectibles"
        ],
        [
            "text"=>"Videos"
        ],
        [
            "text"=>"Fans"
        ],
        [
            "text"=>"News"
        ],
        [
            "text"=>"Shop"
        ],
    ]
    
@endphp


<header>
    <div class="wrapper">
        <div class="container">
            <div class="img-wrapper">
                <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="">
            </div>
            <nav>
                <ul>
                    @foreach ($navItem as $item)
                    <li> {{ $item['text'] }} </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>

<style lang="scss">
    ul{
        list-style-type: none; 
    }
</style>

