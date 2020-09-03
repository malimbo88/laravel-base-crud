<h2>Create Movie</h2>

{{-- Display error --}}
@if ($errors->any())
 <div class="alert alert-danger">
   <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
   </ul>
 </div>
@endif
{{-- end Display error --}}

{{-- Form Create movie --}}
<form class="create_movie" action="{{ route("movies.store") }}" method="post">

{{-- Cross-site request forgery --}}
@csrf

{{-- POST request method --}}
@method("POST")

{{-- Data Title --}}
<div class="data script">
  <label>Title</label>
  <input type="text" name="title" value="{{ old("title") }}">
</div>
{{-- end Data Title --}}

{{-- Data Description --}}
<div class="data text">
  <label>Description</label>
  <textarea name="description" rows="8" cols="80">{{ old("description") }}</textarea>
</div>
{{-- end Data Description --}}

{{-- Data Year --}}
<div class="data integer">
  <label>Year</label>
  <input type="text" name="year" value="{{ old("year") }}">
</div>
{{-- end Data Year --}}

{{-- Data Rating --}}
<div class="data integer">
  <label>Rating</label>
  <input type="text" name="rating" value="{{ old("rating") }}">
</div>
{{-- end Data Rating --}}

{{-- Data Submit --}}
<div class="data submit">
  <input type="submit" value="Save">
</div>
{{-- end Data Submit --}}

</form>
{{-- end Form Create movie --}}
