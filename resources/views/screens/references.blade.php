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
<header>
<div class="aboutmeref">
	<hr>
	<button class ="headertextcolor" onclick="location.href='{{ url('/addreferences') }}'"><strong>REFERENCES</strong></button>
	<hr>
</div>
</header>

<div class="rowreferenceref">
    
@foreach($reference as $ref)   
   <div class="columnreferenceref">
		  
		  
		<figure>	
		<img src="{{ asset('uploads/employee/' .$ref->ref_image) }}"" class="displayrefimagesref" alt="pic" >
		<figcaption><strong>{{ $ref->ref_name }}</strong></figcaption>
		</figure>
		
		<p class="refp"><font class="setfontref">{{ $ref->ref_role }}</font></p>
		<p class="refp">{{ $ref->ref_feedback }}</p>
		

	</div>
@endforeach
   
 <!--<div class="columnreferenceref">

		<figure>	
		<img src="{{URL('/images/rosy.jpg')}}" class="displayrefimagesref" alt="pic" >
		<figcaption><strong>ROSY CORONADO</strong></figcaption>

		</figure>
		<p class="refp"><font class="setfontref">PSYCHOLOGIST</font></p>
		<p class="refp">
		"As always, great creative thinking for the best solution <wbr>
		Swati thirunavakarasu is by far the most professional and <wbr>
		knowledgeable provider i worked with. i will hire her <wbr>
		again :)"</p>
	  
	</div>
 <div class="columnreferenceref">
	<figure>	
	<img src="{{URL('/images/yury.jpg')}}" class="displayrefimagesref" alt="pic" >
	<figcaption><strong>YURY JAJITZKY</strong></figcaption>

	</figure>
	<p class="refp"><font class="setfontref">CEO/DEVELOPER</font></p>
	<p class="refp">
	"As always, great creative thinking for the best solution <wbr>
	Swati thirunavakarasu is by far the most professional and <wbr>
	knowledgeable provider i worked with. i will hire her <wbr>
	again :)"</p>

`	
  </div>

 <div class="columnreferenceref">
	<figure>	
	<img src="{{URL('/images/kyss.jpg')}}" class="displayrefimagesref" alt="pic" >
	<figcaption><strong>KYSS CHIRINOS</strong></figcaption>

	</figure>
	<p class="refp"><font class="setfontref">MARKETING/DESIGNER</font></p>
	<p class="refp">
	"As always, great creative thinking for the best solution <wbr>
	Swati thirunavakarasu is by far the most professional and <wbr>
	knowledgeable provider i worked with. i will hire her <wbr>
	again :)"</p>
	  
	
 </div>
   
 <div class="columnreferenceref">
	<figure>	
	<img src="{{URL('/images/carhil.jpg')}}" class="displayrefimagesref" alt="pic" >
	<figcaption><strong>JOE RODRIGUEZ</strong></figcaption>

	</figure>
	<p class="refp"><font class="setfontref">CEO/DEVELOPER</font></p>
	<p class="refp">
	"As always, great creative thinking for the best solution <wbr>
	Swati thirunavakarasu is by far the most professional and <wbr>
	knowledgeable provider i worked with. i will hire her <wbr>
	again :)"</p>

	  
	</div>
 <div class="columnreferenceref">
	<figure>	
	<img src="{{URL('/images/leo.jpg')}}" class="displayrefimagesref" alt="pic" >
	<figcaption><strong>MARK ZUCKERBURG</strong></figcaption>

	</figure>
	<p class="refp"><font class="setfontref">MARKETING/DESIGNER</font></p>
	<p class="refp">
	"As always, great creative thinking for the best solution <wbr>
	Swati thirunavakarasu is by far the most professional and <wbr>
	knowledgeable provider i worked with. i will hire her <wbr>
	again :)"</p>

`	
  </div>-->

</div>

<div align="right">
	<a href="{{ url('/index') }}"><img id="arrowbutton" src="{{URL('/images/arrowbutton.png')}}" alt="back"></a>
	</div>
</div>
</body>
</html>
