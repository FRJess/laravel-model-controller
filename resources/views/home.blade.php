@extends('layout.main')

@section('content')
  <div class="container">
    <h1>Elenco film</h1>

    <div class="row">
      @foreach ($movies as $movie)
        <div class=" card-group col-4 mb-3">
          <div class="card text-bg-light border-dark">
            <div class="card-body">
              <h5 class="card-title">{{ $movie->title }}</h5>
              <p class="card-text">Data di uscita: {{ $movie->date }}</p>
              <p class="card-text">Paese di origine: {{ $movie->nationality }}</p>
            </div>
            <div class="card-footer">Voto medio: {{ $movie->vote }}</div>
          </div>
        </div>
      @endforeach

    </div>

  </div>
@endsection
