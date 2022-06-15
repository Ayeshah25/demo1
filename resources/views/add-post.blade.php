<x-header />

<div class="container">
  <h2>Add New Post</h2>
  <form method ="POST" action="{{ route('added') }}">
    @csrf
    <div class="form-group">
      <label for="email">Title:</label>
      <input type="text" class="form-control"  placeholder="Enter title" name="title" value="{{ old('title') }}"> 
    </div>
    @if($errors->has('title'))
      <p class="text-danger">{{ $errors->first('title') }}</p>
    @endif 
    <div class="form-group">
      <label for="pwd">Description:</label>
      <input type="text" class="form-control" placeholder="Enter Description" name="description" value="{{ old('description') }}">
    </div>
    @if($errors->has('description'))
      <p class="text-danger">{{ $errors->first('description') }}</p>
     @endif 
    <input type="submit" class="btn btn-success" value="Add Post" >
  </form>
</div>

<x-footer />