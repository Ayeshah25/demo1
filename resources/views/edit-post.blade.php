<x-header />

<div class="container">
  <h2>Update New Post</h2>
  <form method ="POST" action="{{ route('updated',$post_data->id) }}">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="email">Title:</label>
      <input type="text" class="form-control" value="{{ $post_data->title }}" name="title">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <input type="text" class="form-control" value="{{ $post_data->description }}" name="desc">
    </div>
    
    <input type="submit" class="btn btn-success" value="Update">
  </form>
</div>

<x-footer />