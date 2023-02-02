<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Micronet Broadband Enterprises</title>
    
	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
     <!-- CSS Custom -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- favicon Icon -->
    <!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">-->
    <!-- CSS Plugins -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

		<style>
		
	
	.comparison {
  max-width:1800px;
  font-family: 'Roboto Slab', serif;
  margin:0 auto;
  
  text-align:center;
  padding:10px;
  align:center;
}

.comparison table {
  width:100%;
  
  border-spacing: 0;
  table-layout: fixed;
  border-bottom:1px solid;

   text-align:center !important;
}

.comparison td, .comparison th {
font-size:20px;
  
  empty-cells: show;
  padding:15px;
   text-align:center !important;
   
}

.compare-heading {
  font-size:30px;

  font-weight:bold !important;
  text-align:center !important;
  border-bottom:0 !important;
  padding-top:10px !important;
}

.comparison tbody tr:nth-child(odd) {
  display:none;
}

.comparison .compare-row {
  background:#F5F5F5;
}
.comparison .compare-row1 {
  background:white;
}

.comparison .tickblue {
  color:#0078C1;
  font-size:15px;
}

.comparison .tickgreen {
  color:#009E2C;
  font-size:18px;
}
.comparison .tickred {
  color:#f51515;
  font-size:18px;
}

.comparison th {
  font-weight:normal;
  padding:0;
  border-bottom:1px solid;
}

.comparison tr td:first-child {
  text-align:left;
}
  
.comparison .qbse, .comparison .qbo, .comparison .tl {
  color:#FFF;
  padding:10px;
  font-size:13px;
  border-right:1px solid black;
  border-bottom:0;
}

.comparison .tl2 {
  border-right:0;
}

.comparison .qbse {
  background:#0078C1;
  border-top-left-radius: 3px;
  border-left:1px;
}

.comparison .qbo {
  background:#d7232d;
  border-top-right-radius: 3px;
  border-right:1px;
}

.comparison .price-info {
  padding:5px 15px 15px 15px;
}

.comparison .price-was {
  color:#999;
  text-decoration: line-through;
}

.comparison .price-now, .comparison .price-now span {
  color:#ff5406;
}

.comparison .price-now span {
  font-size:32px;
}

.comparison .price-small {
    font-size: 18px !important;
    position: relative;
    top: -11px;
    left: 2px;
}

.comparison .price-buy {
  background:#ff5406;
  padding:10px 20px;
  font-size:12px;
  display:inline-block;
  color:#FFF;
  text-decoration:none;
  border-radius:3px;
  text-transform:uppercase;
  margin:5px 0 10px 0;
}

.comparison .price-try {
  font-size:12px;
}

.comparison .price-try a {
  color:#202020;
}

@media (max-width: 767px) {
  .comparison td:first-child, .comparison th:first-child {
    display: none;
  }
  .comparison tbody tr:nth-child(odd) {
    display:table-row;
    background:#F7F7F7;
  }
  .comparison .row {
    background:#FFF;
  }
  .comparison td, .comparison th {
    border:1px solid;
  }
  .price-info {
  border-top:0 !important;
  
}
  
}

@media (max-width: 639px) {
  .comparison .price-buy {
    padding:5px 10px;
  }
  .comparison td, .comparison th {
    padding:10px 5px;
  }
  .comparison .hide-mobile {
    display:none;
  }
  .comparison .price-now span {
  font-size:16px;
}

.comparison .price-small {
    font-size: 16px !important;
    top: 0;
    left: 0;
}
  .comparison .qbse, .comparison .qbo {
    font-size:12px;
    padding:10px 5px;
  }
  .comparison .price-buy {
    margin-top:10px;
  }
  .compare-heading {
  font-size:13px;
  
}
}
	</style>
</head>
<body>


<header class="navbar-fixed-top">
	<div class="container">
    	<div class="row">
        	<div class="header_top">
        		<div class="col-md-2">
            		<div class="logo_img">
						<a href="index.html"><img src="images/logo1.png" alt="logoimage" style="height:50px; width:60px;" ></a>
					</div>
				</div>
					
				<div class="col-md-10">
					<div class="menu_bar">	
						<nav role="navigation" class="navbar navbar-default">
							<div class="navbar-header">
                                <button id="menu_slide"  aria-controls="navbar" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
							   </div>
							   
							  <div class="collapse navbar-collapse" id="navbar">
                            
									<ul class="nav navbar-nav">
									  <li><a href="#home" class="js-target-scroll">Home</a></li>
									   <li><a href="#about" class="js-target-scroll">About Us</a></li>
									  <li><a href="#services" class="js-target-scroll">Services</a></li>
									  <li><a href="#customers" class="js-target-scroll">Customers</a></li>
									  <li><a href="#pricing" class="js-target-scroll">Pricing</a></li>
									 
									  <li><a href="#testimonial" class="js-target-scroll">Testimonial</a></li>
									 
									  <li><a href="#contact" class="js-target-scroll">Contact</a></li>
								
									</ul>      
                          		</div>
							  
							 
       			
						</nav>
					</div>
    	        </div>
			  
			  </div>
			</div>
		</div>
</header>


<section id="home" class="top_banner_bg secondary-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="top_banner">
				
				</div>
				
				<div class="col-md-12">
					<div class="present">
						<h1 style="margin-top:170px;" align="center">Micronet Broadband - One Solution To All Your Internet Needs</h1>
						
				
					</div>
					<br><br><br><br><br><br><br><br>
				</div>
				
			
			</div>
		</div>
	</div>
</section>
<style>
.plans p{
	color:#f6b20e;
	font-size:30px;
	font-weight:700;
	margin-top:45px;
}
.plans1 p{
	border: 2px solid black;
	padding:30px 40px 40px;
	color:black;
	font-size:33px;
	font-weight:600;
	margin-top:22px;
	
}



.plans2 p{
	border: 2px solid black;
	padding:30px 40px 35px;
	color:black;
	font-size:28px;
	font-weight:600;
	margin-top:22px;
	
}

.plans3 p{
	
	padding:30px 40px 40px;
	color:black;
	font-size:33px;
	font-weight:600;
	margin-top:22px;
	
}

.plans1 p span{

	color:black;
	font-size:20px;
	font-weight:500;
	
}
.plans2 p span{

	color:black;
	font-size:20px;
	font-weight:500;
	
}
</style>

<section class="primary-bg" id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			
			<div class="section_heading">
				<h2> ABOUT US </h2>
			
			</div>		
		
			</div>
		</div>
		</div>
		<!--
			<div class="row" align="center">
			<div class="col-md-3">
			<p style="color:blue; font-size:30px;">FUP Plan</p>
			</div>
			<div class="col-md-2">
			<p style="color:blue; font-size:30px;">Base Plan</p>
			</div>
				<div class="col-md-2">
				<p style="color:blue; font-size:30px;">Speed Upto</p>
			</div>
				<div class="col-md-2">
				<p style="color:blue; font-size:30px;">Speed After</p>
			</div>
				<div class="col-md-2">
				<p style="color:blue; font-size:30px;">Price</p>
			</div>
				<div class="col-md-1">
			</div>
			</div>
		
		-->	
		
		<div align="center" class="row" style=" background-color:#f0efef80; height:190px; width:100%;" >
			
			<div class="col-md-2 plans">
			<p>1 Month</p>
			</div>
			<div class="col-md-2 plans1">
			<p><br>200 GB<br></p>
			</div>
			<div class="col-md-2 plans2">
			<p>
			<small>*</small>50 <small>Mbps</small>
			<span>Upto 200 GB</span>
			</p>
			</div>
			<div class="col-md-2 plans2">
			<p>
			2 <small>Mbps</small>
			<span>After 200 GB</span>
			</p>
			</div>
			<div class="col-md-2 plans3">
			<p>
			<br>11000/- <br>
			<span></span>
			</p>
			</div>
			<div class="col-md-2">
			<h5 align="center"><br>*Internet speed will drop to 2 Mbps after 200 GB.</h5>
			</div>
			</div>
			<br>
					<div align="center" class="row" style=" background-color:#f0efef80; height:190px; width:100%;" >
			
			<div class="col-md-2 plans">
			<p>1 Month</p>
			</div>
			<div class="col-md-2 plans1">
			<p><br>200 GB<br></p>
			</div>
			<div class="col-md-2 plans2">
			<p>
			<small>*</small>50 <small>Mbps</small>
			<span>Upto 200 GB</span>
			</p>
			</div>
			<div class="col-md-2 plans2">
			<p>
			2 <small>Mbps</small>
			<span>After 200 GB</span>
			</p>
			</div>
			<div class="col-md-2 plans3">
			<p>
			<br>11000/- <br>
			<span></span>
			</p>
			</div>
			<div class="col-md-2">
			<h5 align="center"><br>*Internet speed will drop to 2 Mbps after 200 GB.</h5>
			</div>
			
			
			</div>
	</div>
</section>




<section id="contact" class="contact_bg" style="margin-top:400px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section_heading section_heading_2">
					<h2> Contact Us </h2>
				
					<h4>Drop your details and we will connect with you to provide seamless internet experience.</h4>
				</div>
							
				<div class="col-md-6">
					<div class="contact_form">
					<form>
					  <div class="form-group">
						<label >Full Name : <span> *</span></label>
						<input type="email" class="form-control" id="exampleInputEmail1" >
					  </div>
					  <div class="form-group">
						<label >Contact : <span> *</span></label>
						<input type="email" class="form-control" id="exampleInputEmail1" >
					  </div>
					  
					  <div class="form-group">
						<label >Email Address : <span> *</span></label>
						<input type="text" class="form-control" id="exampleInputPassword1" >
					  </div>
					  
					  <div class="form-group">
						<label>Message <span> </span></label>
						<textarea class="form-textarea" rows="3"></textarea>
					 </div>
					  
					    <div class="section_sub_btn">
							<button class="btn btn-default" type="submit">  Send Message</button>	
						</div>
					</form> 
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="contact_text">
						<ul>
							<li>
								<span><i class="fa fa-home" aria-hidden="true"></i></span> 
								<h5> Jagdish Nagar, 2A Building Ground Floor, <br>
Ganeshkhind Road, Aundh, Pune-411007</h5>
							</li>
							
							<li>
								<span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> 
								<h5> info@mymicronet.com </h5>
							</li>
							
							<li>
								<span><i class="fa fa-whatsapp" aria-hidden="true"></i></span> 
								<h5> +91 9762486218 </h5>
							</li>
							
							<li>
								<span><i class="fa fa-phone" aria-hidden="true"></i></span> 
								<h5> +91 9881144545 </h5>
							</li>
						</ul>
						
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
</section>



<footer class="third-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="footer_top">
					<h4> Share Your Favorite Mobile Apps With Your Friends  </h4>
					
					<ul>
						<li> <a href="http://facebook.com/"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
						<li> <a href="http://twitter.com/"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </li>
						<li> <a href="http://linkedin.com/"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
						<li> <a href="http://google.com/"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a> </li>
						<li> <a href="http://youtu.be/"> <i class="fa fa-youtube-square" aria-hidden="true"></i> </a> </li>
						<li> <a href="https://www.instagram.com"> <i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
					</ul>
				</div>
				
				
				
				
			</div>
		</div>
	</div>
	
	<div class="footer_bottom fourth-bg">
		<!-- Keep Footer Credit Links Intact -->
          <p> 2016 &copy; Copyright Applayers. All rights Reserved. Powered By Free <a href="http://www.pfind.com/goodies/applayers/">AppLayers</a> Template from <a href="http://www.pfind.com/goodies/">pFind Goodies</a>. </p>
        <a href="#" class="backtop"> ^ </a>
    </div>
				
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/interface.js"></script> 
<script type="text/javascript"> 
	$(document).ready(function(){
	$("#menu_slide").click(function(){
		$("#navbar").slideToggle('normal');
	});
	});
 </script>
<!--Menu Js Right Menu-->
<script type="text/javascript">
$(document).ready(function(){
  $('#navbar > ul > li:has(ul)').addClass("has-sub");
  $('#navbar > ul > li > a').click(function() {
    var checkElement = $(this).next();
    $('#navbar li').removeClass('dropdown');
    $(this).closest('li').addClass('dropdown');	
    if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
      $(this).closest('li').removeClass('dropdown');
      checkElement.slideUp('normal');
    }
    if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
      $('#navbar ul ul:visible').slideUp('normal');
      checkElement.slideDown('normal');
    }
    if (checkElement.is('ul')) {
      return false;
    } else {
      return true;	
    }		
  });
});
<!--end-->
</script>
<script type="text/javascript">	
$("#navbar").on("click", function(event){
    event.stopPropagation();
});
$(".dropdown-menu").on("click", function(event){
    event.stopPropagation();
});
$(document).on("click", function(event){
    $(".dropdown-menu").slideUp('normal');
});	

$(".navbar-header").on("click", function(event){
    event.stopPropagation();
});
$(document).on("click", function(event){
    $("#navbar").slideUp('normal');
});		
</script>

</body>
<!-- JS Plugins -->
  </html>
