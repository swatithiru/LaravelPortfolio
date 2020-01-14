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
	    <th>job_id</td>
        <th>job title</th>
        <th>job company</th>
        <th>job duration</th>
		<th>job year</th>
		
      </tr>
    </thead>
    <tbody>
      @foreach($resume as $reguser)
      <tr>
	    <td>{{$reguser['job_id']}}</td>
        <td>{{$reguser['job_title']}}</td>
        <td>{{$reguser['job_company']}}</td>
        <td>{{$reguser['job_duration']}}</td>
		<td>{{$reguser['job_year']}}</td>
		
		<td><a href="{{action('AboutUpdateController@updateResumeData', $reguser['job_id'])}}" class="btn btn-warning">Edit</a></td>
		 <td>
          <form action="{{ action('ResumeController@deleteResume', $reguser['job_id']) }}" method="GET">
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
