{{-- View movies.blade.php --}}

{{-- Foreach $movie inside Collection $movies --}}
@foreach ($movies as $movie)

  {{-- Movie --}}
  <div class="movie">
    <h2 class="movie_title">Title: {{ $movie->title }}</h2>

    {{-- Movie data --}}
    <ul class="movie_data">
      <li>Description: {{ $movie->description }}</li>
      <li>Year: {{ $movie->year }}</li>
      <li>Rating: {{ $movie->rating }}</li>

      {{-- Link to show --}}
      <li>
        <a href="{{ route("movies.show", $movie->id) }}">View</a>
      </li>
      {{-- end Link to show --}}

    </ul>
    {{-- Movie data --}}

  </div>
  {{-- end Movie --}}

@endforeach
{{-- end Foreach $movie inside Collection $movies --}}
