{{-- View show.blade.php --}}

{{-- Movie --}}
<div class="movie">
  <h2 class="movie_title">Title: {{ $movie->title }}</h2>

  {{-- Movie data --}}
  <ul class="movie_data">
    <li>Description: {{ $movie->description }}</li>
    <li>Year: {{ $movie->year }}</li>
    <li>Rating: {{ $movie->rating }}</li>

    {{-- Comeback to index --}}
    <li>
      <a href="{{ route("movies.index") }}">ComeBack</a>
    </li>
    {{-- end Comeback to index --}}

  </ul>
  {{-- Movie data --}}

</div>
{{-- end Movie --}}
