<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/portfolio.css')}}">
<script src="{{asset('js/contactMeValidate.js')}}"></script>
<style>
    span {
        display: inline;
    }
</style>
</head>
<body class="fontbody">
<form action="{{url('/insertreference')}}" enctype="multipart/form-data" method="POST">
{{csrf_field()}}
<div id = "wrapper">
<div class="aboutmecon">
<hr>
<button class ="headertextcolor"><strong>ADD A REFERENCE</strong></button>
<hr>
</div>
    <div class="contactrowcon">
        <br>
 <div align="center" id="fun">
 <p align="center">LET'S SHARE OUR FEEDBACK</p>
 </div>
  <div align="left" id="contactme">
  <input type="text" class= "inputcon" name="refname" placeholder="Reference Name">

  
  </div>
   <div align="left" id="contactme">
  <input type="text" class= "inputcon" name="refrole" placeholder="Reference Role">      
  </div>
  <div align="left" id="contactme">
  <textarea rows="4" cols="50" name="reffeedback" placeholder="Reference Feedback"></textarea>   
  </div>
  <div align="left" id="contactme">
  Add Reference Image: <input type="file" id="refImage" name="refImage" placeholder="Your Image..">
  </div>
   <div align="left" id="contactme">
	<button class="buttonsignupcon" name="refsend">Send Now</button>
  </div>
  @if (\Session::has('reference'))
      <div class="alert alert-success">
        <p>{{ \Session::get('reference') }}</p>
      </div><br />
     @endif
  
 
</div>
<div align="right">
	<a href="{{ url('/references') }}"><img id="arrowbutton" src="{{URL('/images/arrowbutton.png')}}" alt="back"></a>
</div>

</div>
</form>
</body>
</html>
<!--
https://stackoverflow.com/questions/36718805/how-to-insert-a-button-in-the-middle-of-a-hr 
https://codepen.io/ingomc/pen/ZLQORM-->