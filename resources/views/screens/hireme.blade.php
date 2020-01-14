<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/portfolio.css')}}">
</head>
<body class="fontbody">
<div id="wrapper">
<header>
<div class="aboutmehire">
	<hr>
	<button class ="headertextcolor"><strong>HIRE ME</strong></button>
	<hr>
</div>
</header>

<div class="rowhire">
<div>
@foreach($hireme as $hire)
		<div class="columnhire">
		
		<img src="{{ asset('uploads/employee/' .$hire->product_image) }}" class="imghire" alt="Image"/>
		<div id="servicehire"><strong>{{ $hire->product_price }}</strong></div>
		<div id="servicehire">{{ $hire->product_title }}</div>
		<div id="servicehire">{{ $hire->product_desc }}</div>
		<button onclick="location.href='{{ url('/sendemail') }}'" class="buttonsignuphire">Contact US</button>
	
 </div>
@endforeach

  <!--<div class="columnhire">
    <img class = "imghire" src="{{URL('/images/car1.png')}}" alt="cart1"><br>
		
		<div id="servicehire"><strong>$300</strong></div>
		<div id="servicehire">Design for Natural people</div>
		<div id="servicehire">Logo</div>
		<div id="servicehire">Advertising image to print</div>
		<div id="servicehire">Photo editing</div>
		
		<button onclick="location.href='{{ url('/contactme') }}'" class="buttonsignuphire">Contact US</button>
	
 </div>
 
   
  <div class="columnhire">
<img class = "imghire" src="{{URL('/images/car2.png')}}"alt="cart2"><br>
		<div id="servicehire"><strong>$650</strong></div>
		<div id="servicehire">Informative website design</div>
		<div id="servicehire">Logo</div>
		
<div id="servicehire">Photo editing</div>
		<div id="servicehire">site construction</div>
		<div id="servicehire">6 months Maintenance</div>
	  <button onclick="location.href='{{ url('/contactme') }}'" class="buttonsignuphire">Contact US</a>
	</div>
  <div class="columnhire">
   <img class = "imghire" src="{{URL('/images/car3.png')}}" alt="cart3"><br>
		<div id="servicehire"><strong>$1450</strong></div>
		<div id="servicehire">3D character design</div>
		<div id="servicehire">Character sketch</div>
		<div id="servicehire">Digitization and development</div>
		<div id="servicehire">Animation</div>
		<div id="servicehire">Video demo</div>
		<button onclick="location.href='{{ url('/contactme') }}'" class="buttonsignuphire">Contact US</button>
`	
  </div>-->
</div>
</div>

	<div align="right">
	<a href="{{ url('/index') }}"><img id="arrowbutton" src="{{URL('/images/arrowbutton.png')}}" alt="back"></a>
	</div>
</div>
</body>
</html>
