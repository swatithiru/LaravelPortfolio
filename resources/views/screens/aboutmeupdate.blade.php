<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Edit About Me</title>
  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/portfolio.css')}}">
</head>
<body>
<hr class="hraboutMe">
<div class="wrapper">
<form class="" name="editprofile" action="{{ action('AboutUpdateController@updateinDB', $id) }}" method="GET">  
  <div class="container">
	<h3 align="center" style="font-family:Rajdhani;"> Modify My Profile </h3>
	<!--<form action="adminpage.php" enctype="multipart/form-data">-->
    
	<label  for="newservicetitle">Add new Address: </label>
    <input type="text" id="insertadd" name="insertadd" value="{{ $about->address }}">

	
	<label  for="newservicedescription">Add new role: </label>
    <input type="text" id="insertrole" name="insertrole" value="{{ $about->role }}">
	
	<label  for="newservicecharge">Add a new phone number: </label>
    <input type="text" id="insertphone" name="insertphone" value="{{ $about->phone }}" required>
	
	<label  for="newserviceImage">Add new website name: </label>
    <input type="text" id="insertwebsite" name="insertwebsite" value="{{ $about->website }}">
    
    <label  for="newserviceImage">Add new skype name: </label>
    <input type="text" id="insertskype" name="insertskype" value="{{ $about->skype }}">
    
    <label  for="newserviceImage">Add new cv: </label>
    <input type="text" id="insertcv" name="insertcv" value="{{ $about->cv }}">
    
    <button class="btn btn-danger" type="submit">update</button>
  </div>
</form>
</div>
</body>
</html>