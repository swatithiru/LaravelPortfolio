<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/portfolio.css')}}">
</head>
<body class="fontbody">
<div id="wrapper">
<div class="aboutmeres">
	<hr>
	<button class ="headertextcolor"><strong>RESUMES</strong></button>
	<hr>
</div>

<div class="rowres">
<?php
$count = 0;
?>
@foreach($resume as $res)  

 <?php
 if($count%2==0)
    {
	?>
	<div class="first-columnres">
    <div align="left">
	<div class="company1res">{{ $res->job_title }}</div>
	<div class="role1res">{{ $res->job_company }} ({{ $res->job_duration }})</div>
	</div>
	</div>
	<div class="second-columnres">
    <hr id="line">
    <p id="yearcolor">{{ $res->job_year }}<p>
	 <hr id="line">
    <p id="yearcolor">{{ $res->job_year }}<p>
    </div>
	
	<?php
	}
	else
	{
	?>
	<div class="third-columnres">
	<br><br><br><br><br>   
	<div align="left">
	<div class="companyres"> {{ $res->job_title }}</div>
	<div class="roleres"> {{ $res->job_company }} ({{ $res->job_duration }})</div>
	</div>
	</div>  
	
	<?php
	}
	$count++;
	?>
		
		
	


@endforeach
  <!--<div class="first-columnres">
    <div align="leftres">
	<div class="company1res"> DiazApps</div>
	<div class="role1res"> Intern (July 2016 - present)</div>
	</div>
<br><br><br>
	<div align="left">
	<div class="company1res"> Polar Food CA</div>
	<div class="role1res"> Manager Web Development (Jan 2013 - Dec 2013)</div>
	</div>
<br><br><br>	
	<div align="left">
	<div class="company1res"> Government of the state of Lara </div>
	<div class="role1res"> Intern (July 2006 - Dec 2010)</div>
	</div> 
  </div>
  <div class="second-columnres">
  <hr id="line">
  <p id="yearcolor">2016<p>
  <hr id="line">
  <p id="yearcolor"> 2014 <p>
  <hr id="line">
  <p id="yearcolor"> 2013 <p>
  <hr id="line">
  <p id="yearcolor"> 2012 <p>
  <hr id="line">
  <p id="yearcolor"> 2010 <p>
  <hr id="line">
  
  </div>
  <div class="third-columnres">
  <br><br><br><br><br>   
  <div align="left">
	<div class="companyres"> Nestle Venezuela</div>
	<div class="roleres"> Front End Developer (Jan 2014 - Dec 2015)</div>
	</div>
	<br><br><br>
   <div align="left">
	<div class="companyres"> Nestle Venezuela</div>
	<div class="roleres"> Intern (July 2012 - Dec 2013)</div>
	</div>
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
