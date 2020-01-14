<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/portfolio.css')}}">
<script src="{{asset('js/contactMeValidate.js')}}"></script>
</head>
<body class="fontbody">
<form method="post" name="validateForm" action="contactme.blade.php">
<div id = "wrapper">
<div class="aboutmecon">
<hr>
<button class ="headertextcolor"><strong>CONTACT ME</strong></button>
<hr>
</div>
    <div class="contactrowcon">
  <div class="contactcolumncon contactleftcon">
  <div align="left" id="contactme">
  <p>CONTACT ADDRESS</p>
  </div>
   <div align="left" id="contactme">
	<img src="{{URL('/images/address.png')}}" class="imgcon" align="left">
	<span><strong>Address:</strong></span><p> 101 s center street</p>
	</div>
	
	<div align="left" id="contactme">
	<img src="{{URL('/images/telephone.jpg')}}" class="imgcon" align="left">
	<span><strong>Phone: +</strong></span><p> 6825584661</p>
	</div>
	
	<div align="left" id="contactme">
	<img src="{{URL('/images/whatsap.png')}}" class="imgcon" align="left">
	<span><strong>Whatsapp: +</strong></span><p> +6825584661</p>
	</div>
	
	
	<div align="left" id="contactme">
	<img src="{{URL('/images/skype.png')}}" class="imgcon" align="left">
	<span><strong>Skype:</strong></span><p> skype.com</p>
	</div>
	
	<div align="left" id="contactme">
	<img src="{{URL('/images/letter.png')}}" class="imgcon" align="left">
	<span><strong>Email:</strong></span><p id="textcolorcon"> swati.thirunavakarasu@gmail.com</p>
	</div>

	<div align="left" id="contactme">
	<img src="{{URL('/images/website.png')}}" class="imgcon" align="left">
	<span><strong>Website:</strong></span><p id="textcolorcon"> www.website.com</p>
	</div>
	
	<div align="left" class="iconsizescon">
	<i class="fa fa-facebook-square fa-2x"></i> &nbsp; <i class="fa fa-twitter-square fa-2x"></i> &nbsp; <i class="fa fa-linkedin-square fa-2x"></i> &nbsp; <i class="fa fa-pinterest-square fa-2x"></i> &nbsp; <i class="fa fa-google-plus-square fa-2x"></i> &nbsp; <i class="fa fa-opera fa-2x"></i>
	</div>
	
	 </div>
  <div class="contactcolumncon contactrightcon"> 
 <div align="left" id="fun">
 <p>LET'S HAVE A FUN</p>
 </div>
  <div align="left" id="contactme">
  <input type="text" class= "inputcon" id="yourname" name="yourname" placeholder="Your Name" minlength="5" maxlength="20" onblur="validateMsgUserName()" required>
  <div id="msguser_error"></div>
  
  </div>
  
   <div align="left" id="contactme">
  <input type="email" class= "inputcon" id="email" name="email" placeholder="Email" onblur="validateMsgEmail()" required>
  <div id="msgemail_error"></div>
       
  </div>
  
  <div align="left" id="contactme">
  <input type="tel" class= "inputcon" id="phone" name="phone" placeholder="Phone" maxlength="10" onblur="validateMsgPhone()" required>
   <div id="msgphone_error"></div>
    
  </div>
  <div align="left" id="contactme">
  <textarea rows="4" cols="50" id="comment" name="comment" placeholder="Your Message" minlength="5" onblur="validateMsgComment()" required></textarea>
  <div id="msgcomment_error"></div>
 
  </div>
   <div align="left" id="contactme">
	<button class="buttonsignupcon" name="send">Send Now</button>
  </div>
  <div align="left" id="contactme">
	
  </div>
  
   </div>
 </div>
</div>
<div align="right">
	<a href="{{ url('/home') }}"><img id="arrowbutton" src="{{URL('/images/arrowbutton.png')}}" alt="back"></a>
</div>

</div>
</form>
</body>
</html>
<!--
https://stackoverflow.com/questions/36718805/how-to-insert-a-button-in-the-middle-of-a-hr 
https://codepen.io/ingomc/pen/ZLQORM-->