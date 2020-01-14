<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
	    <th>contactid</td>
        <th>phone</th>
        <th>address</th>
        <th>nationality</th>
		<th>description</th>
		<th>role</th>
      </tr>
    </thead>
    <tbody>
      @foreach($aboutme as $reguser)
      <tr>
	    <td>{{$reguser['contact_id']}}</td>
        <td>{{$reguser['phone']}}</td>
        <td>{{$reguser['address']}}</td>
        <td>{{$reguser['nationality']}}</td>
		<td>{{$reguser['description']}}</td>
		<td>{{$reguser['role']}}</td>
		<td><a href="{{action('AboutUpdateController@updateData', $reguser['contact_id'])}}" class="btn btn-warning">Edit</a></td>
		 <td>
          <form action="{{ action('AboutController@deleteData', $reguser['contact_id']) }}" method="GET">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ url('/adminpage') }}" class="btn btn-default">Back</a>
  </div>
  </body>
</html>
