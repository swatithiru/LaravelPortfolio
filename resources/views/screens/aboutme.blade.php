<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/portfolio.css')}}">
</head>
<body class="fontbody">
<div id="wrapper">
<div class="aboutmeabt">
<hr>
<button class ="headertextcolor"><strong>ABOUT ME</strong></button>
<hr>
</div>
<div class="rowabt">
@foreach($aboutme as $about)
  <div class="colabt leftabt" style="background-color:#FFFFFF;">
  <img src="{{ asset('uploads/employee/' .$about->image) }}" class="displayimageabt" alt="pic" align="top" border="2">
  <p class="centerabt"> {{ $about->role }}<p>
    </div>
  <div class="colabt rightabt" style="background-color:#FFFFFF;">
  <div class="rowabt">
  <div class="columnabt lefabt">
    <div align="left">
	<img src="{{URL('/images/manC.jpg')}}" class="imgabt" align="left">
	<span>Name</span>
	<br/>
	<p>Swati Thirunavakarasu</p>
	</div>
	<br>
	<div align="left">
	<img src="{{URL('/images/phoneC.jpg')}}" class="imgabt" align="left">
	<span>Phone</span>
	<br/>
	<p>{{ $about->phone }}</p>
	</div>
	<br>
	
	<div align="left">
	<img src="{{URL('/images/addC.jpg')}}" class="imgabt" align="left">
	<span>Address</span>
	<br/>
	<p>{{ $about->address }}</p>
	</div>
	
  </div>
  <div class="columnabt rigabt">
    <div align="left">
	<img src="{{URL('/images/emailC.jpg')}}" class="imgabt" align="left">
	<span>Email</span>
	<br/>
	<p>Swatithirunavakarasu@gmail.com</p>
	</div>
	<br>
	<div align="left">
	<img src="{{URL('/images/calC.jpg')}}" class="imgabt" align="left">
	<span>Date Of Birthday</span>
	<br/>
	<p>{{ $about->DOB }}</p>
	</div>
	<br>
	<div align="left">
	<img src="{{URL('/images/nation.jpg')}}" class="imgabt" align="left">
	<span>Nationality</span>
	<br/>
	<p>Indian</p>
	</div>
	
  </div>
</div>
	<div align="left">
	<p>Social Profiles </p> <i class="fa fa-facebook-square fa-2x"></i> <i class="fa fa-twitter-square fa-2x"></i> <i class="fa fa-linkedin-square fa-2x"></i> <i class="fa fa-pinterest-square fa-2x"></i> <i class="fa fa-google-plus-square fa-2x"></i> <i class="fa fa-opera fa-2x"></i>
	<div class="contentabt">
	<p>{{ $about->description }}</p>
	</div>
	<div class="contentabt">
	<p>Yours Sincreley,</p><br>
	<img src="{{URL('/images/sign.png')}}" class="signabt" align="left">
	</div>
	
	</div>
	
	</div>
	@endforeach 
	</div>
	<div align="right">
	<a href="{{ url('/index') }}"><img id="arrowbutton" src="{{URL('/images/arrowbutton.png')}}" alt="back"></a>
	</div>
</div>
</body>
</html>
<!--
https://stackoverflow.com/questions/36718805/how-to-insert-a-button-in-the-middle-of-a-hr -->