<!DOCTYPE HTML>
<html>
<head>
<title>VPS Hosting, Web Hosting in India | VPS Hosting, Web Hosting, Web Design and Digital Marketing Agency in Chennai</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="We are a creative digital marketing, Web Hosting, VPS Hosting and web design & development agency in Chennai, India." />
<meta name="keywords" content="Digital Agency in India, VPS Hosting in India, Digital Marketing Agency in India, VPS Hosting Chennai, Web Design Agency Chennai, Web Hosting in Chennai" />
<meta name="author" content="eniruvana">

<!---css-->
<link href="./css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="./css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="./css/responsivemultimenu.css" rel="stylesheet" type="text/css"/>
<link href="./images/enfav.ico" rel="shortcut icon" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---css-->

<!--script-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="./js/jquery-1.11.1.min.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/en.js" type="text/javascript"></script>
<script src="./js/responsivemultimenu.js" type="text/javascript"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-74076410-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-74076410-1');
</script>

<script language="javascript" type="text/javascript">
    <!--
    	function GetXmlHttpObject(handler)
		{ 
			var objXmlHttp=null;
			if (navigator.userAgent.indexOf("MSIE")>=0)
			{ 
				var strName="Msxml2.XMLHTTP";
				if (navigator.appVersion.indexOf("MSIE 5.5")>=0)
				{
					strName="Microsoft.XMLHTTP";
				} 
				try
				{ 
					objXmlHttp=new ActiveXObject(strName);
					objXmlHttp.onreadystatechange=handler;
					return objXmlHttp;
				} 
				catch(e)
				{ 
					alert("Error. Scripting for ActiveX might be disabled");
					return;
				} 
			} 
			if (navigator.userAgent.indexOf("Mozilla")>=0)
			{
				objXmlHttp=new XMLHttpRequest();
				objXmlHttp.onload=handler;
				objXmlHttp.onerror=handler;
				return objXmlHttp;
			}
		} 
		var vflag = 0;
		function checkform() 
		 {
		   if ((document.en.nam.value=="") || (document.en.nam.value=="Name"))
		   {
			 alert("Please enter your Name");
			 document.en.nam.focus();
			 return;
		   }
		   if ((document.en.cname.value=="") || (document.en.cname.value=="Company Name"))
		   {
			 alert("Please enter your Company Name");
			 document.en.cname.focus();
			 return;
		   }
		   if ((document.en.address.value=="") || (document.en.address.value=="Address"))
		   {
			 alert("Please enter your Address");
			 document.en.address.focus();
			 return;
		   }
		   var x = document.en.phone.value;
		   if ((document.en.phone.value=="") || (document.en.phone.value=="Phone"))
			   {
				 alert("Please enter your Contact Number");
				 document.en.phone.focus();
				 return;
			   }
			   else if(isNaN(document.en.phone.value))
				{
					alert("Please enter a valid Contact Number")
					document.en.phone.focus()
					return			
				}
			   else if ((x.length < 10) || (x.length > 12))
	           {
	                alert("Please enter your Contact Number which should not lesser than 10 digits and greater than 12 digits");
	                document.en.phone.focus();
				 	return;
	           }
		   if ((document.en.emailid.value=="") || (document.en.emailid.value=="Email ID"))
		   {
			 alert("Please enter your Email");
			 document.en.emailid.focus();
			 return;
		   }
		   else
		   {
		  		if(!checkEmail(document.en.emailid.value))
		  		{
				 alert("please enter valid Email ID");
				 document.en.emailid.focus();
				 return;
		  		}
			
		   }
		   
		  if (document.en.captchacode.value=="")
		   {
			 alert("Please enter the code.");
			 document.en.captchacode.focus();
			 return;
		   }
		   if(document.en.captchacode.value != "")
		   {
		   		var url="captchaverify.asp?captchacode="  + document.en.captchacode.value ;
				xmlHttp=GetXmlHttpObject(stateChanged);
				xmlHttp.open("GET", url , false);
				xmlHttp.send(null);
	       }
		   function stateChanged() 
		   { 
				if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
				{
	
					if(xmlHttp.responseText == "False")
					{
						RefreshImage('imgCaptcha');
						document.getElementById("errmsg").innerHTML = "You entered the wrong code.";
						vflag = 0;
						return false;
					}
					else
					{
					  document.getElementById("errmsg").innerHTML = "The code you enter verified.";
					  vflag = 1;
					}
				}
		   } 
		   if(vflag == 1)
		   {
			   document.en.method="post";
			   document.en.action="contact-ussave.asp"
			   document.en.submit();
		   }
	  }
	  /*function resetall()
	  {
	  		document.applyonline.reset()
	  }*/
    //-->
    </script>
	<script language="javascript">
    	function RefreshImage(valImageId)
		{
			var objImage = document.images[valImageId];
			if (objImage == undefined) 
			{
				return;
			}
			var now = new Date();
			objImage.src = objImage.src.split('?')[0] + '?x=' + now.toUTCString();
		}
	</script>
<!--script-->
</head>
<body>
<form name="en" action="">
	<!---header content starts--->
	<header>
	<!--#include file="header.html"-->	
	</header>
	<!---header content ends--->
	<!---body content starts--->
	<!-- banner1-->
	<div class="mcont">
	<div class="banner1">
		 <div class="container"><h2>Contact Us</h2></div>
	</div>
	</div>
	<!-- //banner1-->
	<!-- //contact -->
				<div class="content">
					<div class="contact">
						<div class="container">
							<h2>How To Find Us</h2>
							<div class="contact-bottom">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15552.822138124435!2d80.171673!3d12.958696!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd3223bdc561e778b!2seniruvana!5e0!3m2!1sen!2sin!4v1457084839347" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> 
							</div>
							<div class="col-md-4 contact-left">
								<h4>Address</h4>
								<!-- <p>est eligendi optio cumque nihil impedit quo minus id quod maxime
									<span>26 56D Rescue,US</span></p>-->
								<ul>
									<p>No. 1/13A, T3 Ravi Street,</p>
									<p>Bharathipuram, Chrompet,</p>
									<p>Chennai - 600044.</p>
									<!--<li>Telephone :+9144 22650906</li>-->
									<li>Mobile :+917401128366</li>
									<li><a href="mailto:info@eniruvana.com">info@eniruvana.com</a></li>
								</ul>
							</div>
							<div class="col-md-8 contact-left cont">
								<h4>Contact Form</h4>
								
									<%
					  				  sid=request.querystring("sid")
									  'response.write sid
									  if sid="wd" then
									     sid="Web Design"
									  elseif sid="H1" then
									     sid="en-H1"
									  elseif sid="H2" then
									     sid="en-H2"
									  elseif sid="H3" then
									     sid="en-H3"
									  elseif sid="vps1" then
									     sid="en-VPS1"
									  elseif sid="vps2" then
									     sid="en-VPS2"
									  elseif sid="vps3" then
									     sid="en-VPS3"
									  elseif sid="vps4" then
									     sid="en-VPS4"
									  elseif sid="oseo" then
									     sid="SEO"
									  elseif sid="ppc" then
									     sid="Pay Per Click"
									  elseif sid="em" then
									     sid="Email Marketing"
									  elseif sid="omb" then
									     sid="Online Media Buying"
									  elseif sid="wa" then
									     sid="Web Analytics"
									   elseif sid="smm" then
									     sid="Social Media Marketing"
									  end if
									  'response.write sid
									  'response.end
									  if sid<>"" then
								    %>
									<div class="ful-cont flotlt"><input type="text" name="ser" readonly="readonly" value="<%=sid%>" class="input-lg fnt-12 cl-green" /></div>
									<%else%>
									<select class="input-lg cl-green fnt-12" name="serv" title="Service">
										    <option value="">Select the required service</option>
										    <option value="Web Design" class="">Web Design</option>
										    <option value="VPS Linux / Windows Hosting" class="">VPS Linux / Windows Hosting</option>
											<option value="Web Hosting" class="">Web Hosting</option>
											<option value="Internet Marketing" class="">Internet Marketing</option>
											<option value="Social Media Marketing" class="">Social Media Marketing</option>
								    </select>
									<%end if%>
									<div class="ful-cont flotlt"><input type="text" name="nam" onfocus="if(this.value=='Name')this.value='';" onblur="if(this.value=='')this.value='Name';" value="Name" class="input-lg fnt-12 cl-green" /></div>
									<div class="ful-cont flotlt"><input type="text" name="cname" onfocus="if(this.value=='Company Name')this.value='';" onblur="if(this.value=='')this.value='Company Name';" value="Company Name" class="input-lg fnt-12 cl-green" /></div>
									<div class="ful-cont flotlt"><textarea name="address" rows="" cols="" class="txt-area fnt-12 cl-green" title="Address" onfocus="if(this.value=='Address'){this.value='';}" onblur="if(this.value==''){ this.value='Address';}">Address</textarea></div>
									<div class="ful-cont flotlt"><input type="text" name="phone" onfocus="if(this.value=='Phone')this.value='';" onblur="if(this.value=='')this.value='Phone';" value="Phone" class="input-lg fnt-12 cl-green" /></div>
									<div class="ful-cont flotlt"><input type="text" name="emailid" onfocus="if(this.value=='Email ID')this.value='';" onblur="if(this.value=='')this.value='Email ID';" value="Email ID" class="input-lg fnt-12 cl-green" /></div>
									<div class="ful-cont flotlt"><textarea name="requir" rows="" cols="" class="txt-area fnt-12 cl-green" title="Brief Your Requirement" onfocus="if(this.value=='Brief Your Requirement'){this.value='';}" onblur="if(this.value==''){ this.value='Brief Your Requirement';}">Brief Your Requirement</textarea></div>
									<p class="ful-cont flotlt padtop10 cl-green">Please enter the number that you see in the image.</p>
							        <div class="ful-cont flotlt padtop10 cl-green"><p class="flotlt padrt7"><img id="imgCaptcha" src="captcha.asp" /><a href="javascript:void(0)" onclick="RefreshImage('imgCaptcha')"><img src="./images/captacha-refresh-img.gif" alt="Change Image" title="Change Image" border="0" /></a></p><p class="padlt5 padtop5 flotlt"><input name="captchacode" type="text" id="captchacode" class="txt-input2 cl-green" /></p><p class="padtop10 padlt5 flotlt" id="errmsg"></p></div>
									<!--<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
									<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
									<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
									<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
									<div class="ful-cont flotlt"><a href=""><input type="submit" onclick="javascript:checkform();" value="Submit" ></a>
									<input type="reset" value="Clear" >
									</div>-->
									<div class="but-pad mgntop20 padbot5 flotlt fnt-bold"><a href="javascript:checkform();" class="cl-white fnt-12 submitbut"><!-- <button type="submit"> -->Submit <!-- </button> --></a></div>
									<input type="hidden" name="act">
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
<!-- //contact -->

				</div><!---footer content starts--->
	<!--#include file="footer.html"-->	
	<!---footer content ends--->
	<!---body content ends--->
	</form>
</body>
</html>