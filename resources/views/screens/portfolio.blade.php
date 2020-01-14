<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/portfolio.css')}}">
</head>
<body class="fontbody">
<?php
session_start(); 
?>
<div id="wrapper">
<div class="aboutmeport">
	<hr>
	<button class ="headertextcolor"><strong>PORTFOLIO</strong></button>
	<hr>
</div>
<div class="allphotosport">
<button name="ALL" value="ALL" class= "portolioa" onclick="location.href='{{ url('/portfolio') }}'" style="border: none;">All</button>&nbsp;&nbsp;<wbr>
<button name="WEBSITES" value="WEBSITES" class= "portolioa" onclick="location.href='{{ url('/websites') }}'" style="border: none;">Websites</button>&nbsp;&nbsp;<wbr>
<button name="APPS" value="APPS" class= "portolioa" onclick="location.href='{{ url('/apps') }}'" style="border: none;">Apps</button>&nbsp;&nbsp;<wbr>
<button name="DESIGN" value="DESIGN" class= "portolioa" onclick="location.href='{{ url('/design') }}'" style="border: none;">Design</button>     
&nbsp;&nbsp;<wbr><button name="PHOTO" value="PHOTO" class= "portolioa" onclick="location.href='{{ url('/photography') }}'" style="border: none;">Photography</button>     
<!--<a class= "portolioa" href="#">All</a> &nbsp;&nbsp;<wbr> <a class= "portolioa" href="#">Websites</a> &nbsp;&nbsp;<wbr> <a class= "portolioa" href="#">Apps</a> &nbsp;&nbsp;<wbr> <a class= "portolioa" href="#">Design</a> &nbsp;&nbsp;<wbr> <a class= "portolioa" href="#">Photography</a>-->
</div>

@foreach($portfolioWebsite as $port)   
  <div class="columnport">
    <img src="{{ asset('uploads/employee/' .$port->portfolio_images) }}" alt="cart1"><br>
 </div>
 @endforeach

   
  <!--<div class="columnport">
	 <img src="{{URL('/images/asgardia.png')}}" alt="cart1"><br>
	<img src="{{URL('/images/home.jpg')}}" alt="cart1"><br>
	<img src="{{URL('/images/app8.png')}}" alt="cart1"><br>
	<img src="{{URL('/images/dise11.jpg')}}" alt="cart1"><br>
	  
	</div>
  <div class="columnport">
    <img src="{{URL('/images/asgardia.png')}}" alt="cart1"><br>
	<img src="{{URL('/images/home.jpg')}}" alt="cart1"><br>
	<img src="{{URL('/images/app8.png')}}" alt="cart1"><br>
	<img src="{{URL('/images/dise11.jpg')}}" alt="cart1"><br>
`	
  </div>-->

<div align="right">
	<a href="{{ url('/index') }}"><img id="arrowbutton" src="{{URL('/images/arrowbutton.png')}}" alt="back"></a>
	</div>
</div>
</body>
</html>
