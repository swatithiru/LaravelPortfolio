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
<form class="" name="editprofile" action="{{ action('AboutUpdateController@updateinPortfolioDB', $id) }}" method="GET" enctype="multipart/form-data">  
  <div class="container">
	
	<h3 align="center" style="font-family:Rajdhani;">Add Portfolio Images </h3>
Add a Porfolio Image:  <input type="file" name="portfolioImage" id="portfolioImage" accept= "images/*"  value="{{ $portfolio->portfolio_images }}" />
Add a Portfolio Title: <input type="text" name="portfolio_name" id="portfolio_name" value="{{ $portfolio->portfolio_name }}">
<button name="portfoliosubmit" value="Submit" class="buttonsignupcon">UPDATE</button> 
  
  </div>
</form>
</div>
</body>
</html>