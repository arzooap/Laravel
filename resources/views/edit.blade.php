@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Post Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('posts.update', $post->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="title">Title :</label>
              <input type="text" class="form-control" name="title" value="{{ $post->title }}"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="description" value="{{ $post->description }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Views :</label>
              <input type="text" class="form-control" name="views" value="{{ $post->price }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection