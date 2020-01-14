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
<form class="" name="editprofile" action="{{ action('AboutUpdateController@updateinServiceDB', $id) }}" method="GET" enctype="multipart/form-data">  
  <div class="container">
	
	
  <label  for="newservicetitle">Add new Service Title: </label>
    <input type="text" id="newservicetitle" name="newservicetitle" value="{{ $products->product_title }}">
	
	<label  for="newservicedescription">Add new Service Description: </label>
    <input type="text" id="newservicedescription" name="newservicedescription" value="{{ $products->product_desc }}">
	
	<label  for="newservicecharge">Add new Service charge: </label>
    <input type="text" id="newservicecharge" name="newservicecharge" value="{{ $products->product_price }}">


   <br>
    <button name="addService" value="Submit" class="buttonsignupcon">UPDATE</button> 
  </div>
</form>
</div>
</body>
</html>