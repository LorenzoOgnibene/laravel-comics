

@section('film-cards')
    @foreach ($comics as $item)
        <div class="card-element">
            <img src="imageUrl" alt="">
            <h2>{{ $item['title'] }}</h2>
            
        </div>
    @endforeach
@endsection


