{{-- View edit.blade.php --}}
<h2>Update Movie {{ $movie->title }}</h2>

{{-- Form Update movie --}}
<form class="update_movie" action="{{ route("movies.update", $movie->id) }}" method="post">

  {{-- Cross-site request forgery --}}
  @csrf

  {{-- PUT request method --}}
  @method("PUT")

  {{-- Data Title --}}
  <div class="data script">
    <label>Title</label>
    <input type="text" name="title" value="{{ $movie->title }}">
  </div>
  {{-- end Data Title --}}

  {{-- Data Description --}}
  <div class="data text">
    <label>Description</label>
    <textarea name="description" rows="8" cols="80">{{ $movie->description }}</textarea>
  </div>
  {{-- end Data Description --}}

  {{-- Data Year --}}
  <div class="data integer">
    <label>Year</label>
    <input type="text" name="year" value="{{ $movie->year }}">
  </div>
  {{-- end Data Year --}}

  {{-- Data Rating --}}
  <div class="data integer">
    <label>Rating</label>
    <input type="text" name="rating" value="{{ $movie->rating }}">
  </div>
  {{-- end Data Rating --}}

  {{-- Data Submit --}}
  <div class="data submit">
    <input type="submit" value="update">
  </div>
  {{-- end Data Submit --}}

</form>
{{-- end Form Update movie --}}
