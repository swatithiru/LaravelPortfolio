<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/portfolio.css')}}">
</head>
<body>
<hr class="hraboutMe">
<div class="wrapper">
<form class="" name="editprofile" action="{{ action('AboutUpdateController@updateinResumeDB', $id) }}" method="GET">  
  <div class="container">
	<h3 align="center" style="font-family:Rajdhani;"> Modify My Experience </h3>
	<!--<form action="adminpage.php" enctype="multipart/form-data">-->
    
	<label  for="newservicetitle">Job Title: </label>
    <input type="text" id="jobTitle" name="jobTitle" value="{{ $resume->job_title }}">
	
	<label  for="newservicedescription">Job Company: </label>
    <input type="text" id="jobCompany" name="jobCompany" value="{{ $resume->job_company }}">
	
	<label  for="newservicecharge">Job Duration: </label>
    <input type="text" id="jobDuration" name="jobDuration" value="{{ $resume->job_duration }}">
    
    <label  for="newservicecharge">Job Year: </label>
    <input type="text" id="jobYear" name="jobYear" value="{{ $resume->job_year }}">
   <br>
	<div id="submitservice">
    <button name="jobSubmit" value="Submit" class="buttonsignupcon">Update</button> 
  
  </div>
</form>
</div>
</body>
</html>