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
	    <th>product id</td>
        <th>product image</th>
        <th>product title</th>
		<th>product price</th>
		
      </tr>
    </thead>
    <tbody>
      @foreach($products as $reguser)
      <tr>
	    <td>{{$reguser['product_id']}}</td>
        <td>{{$reguser['product_image']}}</td>
        <td>{{$reguser['product_title']}}</td>
		 <td>{{$reguser['product_price']}}</td>
        
		
		<td><a href="{{action('AboutUpdateController@updateServiceData', $reguser['product_id'])}}" class="btn btn-warning">Edit</a></td>
		 <td>
          <form action="{{ action('HireController@deleteService', $reguser['product_id']) }}" method="GET">
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
