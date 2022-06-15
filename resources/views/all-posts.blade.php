<x-header />

<div class="container">
  <h2>All Posts</h2>
  <a href="{{ route('new') }}" class="btn btn-primary">Add New Post</a>
<br><br>
@if(Session::has('success'))
  <div class = "alert alert-info" role="alert">
    <strong>{{ Session::get('success') }}</strong>
  </div>
@endif
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($Posts as $Post)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $Post->title }}</td>
        <td>{{ $Post->description }}</td>
        <td>
          <a href="edit-post/{{ $Post->id }}" class="btn btn-success">Edit</a>
          
          
        </td>
        <td>
          <form method="post" action="del-post/{{ $Post->id }}">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $Posts->links('s') }}
</div>
<x-footer />