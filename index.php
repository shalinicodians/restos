<!DOCTYPE html>
<html>
<head>
	<title>chicago</title>
	<!-- =====================
	   external style
	   ======================== -->
	   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="animate/animate.css">
		<!-- <link rel="stylesheet" type="text/css" href="animate/js/wow.js"> -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

         <link rel="stylesheet" type="text/css" href="gallery_plugin/venobox/venobox.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- ================
		external JS
		===================== -->
		<script src="jQuery/jquery-3.2.1.min.js"></script>
		 <script src="animate/js/wow.js"></script>
              <script>
              new WOW().init();
              </script>
             <script type="text/javascript" src="gallery_plugin/venobox/venobox.js"></script>
              <!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> -->


  <style type="text/css">
		<!-- ===============
		internal css
		=================== -->
		<style type="text/css">
			#loading{
				position: fixed;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				border: 1px solid white;
				z-index: 111999 !important;
				background: url('image/load.gif') 50% 50% no-repeat rgb(249,249,249);
			}
		</style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset-top="397" style="position: relative;">
	
<div id="loading"></div>
  <script type="text/javascript">
	$(document).ready(function(){
	$(window).on("load",function(){
	$("#loading").hide("slow");
   });
});
</script>
<script type="text/javascript">
	
		$(document).ready(function(){
			$('img').on("click",function(){
				$()
			})
		})

	
</script>
<script type="text/javascript">
// 	$(document).ready(function(){
// 	$(".navbar-brand").on("click",function(){
// 		var x = $(".carousel-item").offset();
// 		alert("Top:"+ x.top );
// 	});
// });
	// $(window).on("scroll",function(){
	// 	var slider=$("#slider").offsetTop();
	// 	if (window.offsetTop()==slider) {
	// 		$(".navbar").addClass("fixed-top");
	// 	}
             

		
	// });
	$(window).scroll(function() {
    if($(this).scrollTop() <= 100)
    {
	    $(".navbar").removeClass("fixed-top");
	    $(".navbar").css("opacity","1");
    }
    else{
    	 $(".navbar").addClass("fixed-top");
	     $(".navbar").css("opacity","0.8");
    }
});
</script>
<div class="main-content" style="border: 1px solid black">


     
<div class="container-fluid" style="border: 1px solid red ">
		<!-- ============
		navigation bar
		================== -->
    <div class="row affix" style="border: 1px solid green " >
      <div class="col-lg-12 col-sm-12  col-12 " style="padding: 0px !important;margin: 0px !important;">
     	<nav class="navbar  navbar-expand-lg bg-white" style="" >
     		<a href="" class="navbar-brand">
     			<img src="image/logo.png" style="height: 80px;"/>
     		</a>
     		  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
     			<span><img src="image/menu.png" height="40"></span>
     		  </button>
     	   <div class="navbar-collapse " id="mynav">
     		 <ul class="navbar-nav " style="">
     		 	<li class="nav-item">
     		 		<a href="" class="nav-link pl-5" style="color: black" ><b>Home</b></a>
     		 	</li>
     		 	<li class="nav-item">
     		 		<a href="" class="nav-link pl-5" style="color: black"><b>About</b></a>
     		 	</li>
     		 	<li class="nav-item">
     		 		<a href="" class="nav-link pl-5" style="color: black"><b>OurSpeciality</b></a>
     		 	</li>
     		 	<li class="nav-item">
     		 		<a href="" class="nav-link pl-5" style="color: black"><b>Gallery</b></a>
     		 	</li>
     		 	<li class="nav-item">
     		 		<a href="" class="nav-link pl-5" style="color: black"><b>Feedback</b></a>
     		 	</li>
     		 	<li class="nav-item">
     		 		<a href="" class="nav-link pl-5" style="color: black"><b>Hire Us</b></a>
     		 	</li>
     		 	
     		 </ul>	
     	  </div>
     	</nav>
     
   </div>
</div>

   <!-- ====================
   	slider
    ========================-->
        
	<div class="row navs" style="">

		  <div class="col-sm-12 col-lg-12 col-12 " style="margin: 0px !important;padding: 0px !important">
		     <div id="slider" class="carousel slide" data-ride="carousel">
		       <div class="carousel-inner">
					<div class="carousel-item active">
					<img class="d-block w-100" src="image/slide1.jpg"/>
					</div>
					<div class="carousel-item ">
					<img class="d-block w-100" src="image/slide2.jpg"/>
					</div>
					<div class="carousel-item">
					<img class="d-block w-100" src="image/slide3.jpg"/>
					</div>
					<div class="carousel-item">
					<img class="d-block w-100" src="image/slide4.jpg"/>
					</div>
					<a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon " aria-hidden="true"></span>
					<span class="sr-only">previous</span>
					</a>
					<a class="carousel-control-next" href="#slider" role="button" data-slide="next">
					<span class="carousel-control-next-icon " aria-hidden="true"></span>
					<span class="sr-only">next</span>
					</a>
		      </div>
		   </div>
		</div>
	</div>
	<!-- ==================
	heading
	======================= -->
	<div class="row heading">
			 <div class="col-sm-12 col-lg-12 col-12 wow fadeInDown" style="margin-top: 30px !important;padding: 0px !important;">
			    <a href="" style="text-decoration: none" class="heading">
				     <hr class="line1" style=" width: 150px;height: 0px; border: 0.3px solid red;">
				     <h3 class="text-center" style="color:black;font-weight: 200!important;font-size: 44px">Abot Restaurent</h3>
				      <hr class="line1" style=" width: 150px;height: 3px; border: 0.3px solid red;">
				      <p class="content" style="color:black;">Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.</p>
			   </a>
			</div> 
		</div>
		<!-- ================
		Images
		======================= -->
		<div class="row cards">
			<div class="col-lg-5 col-sm-5 col-12 wow slideInLeft">
				<div class="card" style="border: 1px solid lightgrey;">
					<div style="margin: 10px">
					<img src="image/image1.jpg" class="img-thumbnail" >
					<div class="card-body">
						<h3 class="card-title">John Valley</h3>
						<p class="card-body">Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.</p>
					</div>
				</div>
			  </div>
			</div>

			<div class="col-lg-5 col-sm-5 col-12 wow slideInRight">
				<div class="card " style="border: 1px solid lightgrey;">
					<div style="margin: 10px">
					<img src="image/image2.jpg" class="img-thumbnail" >
					<div class="card-body">
						<h3 class="card-title">Stephanie Hellen</h3>
						<p class="card-body">Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.</p>
					</div>
				</div>
			  </div>
			</div>
		</div>
		<!-- ================
		heading 2
		======================== -->
		<div class="row heading">
			 <div class="col-sm-12 col-lg-12 col-12 wow fadeInDown" style="margin-top: 30px !important;padding: 0px !important;">
			    <a href="" style="text-decoration: none" class="heading">
				     <hr class="line1" style=" width: 150px;height: 0px; border: 0.3px solid red;">
				     <h3 class="text-center" style="color:black;font-weight: 200!important;font-size: 44px">Our Speciality</h3>
				      <hr class="line1" style=" width: 150px;height: 3px; border: 0.3px solid red;">
				      <p class="content" style="color:black;">Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.</p>
			   </a>
			</div> 
		</div>
		<!-- ===================
		main,desert,lunch
		======================== -->
		<div class="row three_col">

			<!-- ==================
			First Coloumn,
			APPETIZER
			====================== -->
		   <div class="col-lg-4 wow slideInLeft" style="padding: 80px">
		   	  <div class="card">
		   	  	<div class="card" style="padding: 5px">
		   	    <h4 class="text-center" style="color: #9b030d">APPETIZERS</h4>
		   	    <hr style="border: 0.5px solid #b7b2b2;width: 150px;margin-left: 85px" class="">
		   	    <div class="row">
                <div class="col-lg-12 col-12" style="">
			   	<img src="image/one.jpg" height="150" width="130" class="rounded-circle" style="float: left;margin-top: 40px;margin-left: 5px">
			    
			    
			   	<h5 class="card-title" style="padding-left:150px">Sweet, Sticky and Spicy Chicken</h5>
			   	<p class="card-text" style="padding-left:150px">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"</p>
			  
			   </div>
			</div>

			    <div class="row" style="margin-top: 40px;">
                <div class="col-lg-12 col-12" style="">
			   	<img src="image/two.jpg" height="150" width="130" class="rounded-circle" style="float: left;margin-top: 40px;margin-left: 5px">
			    
			    
			   	<h5 class="card-title" style="padding-left:150px">Luxur Oyster</h5>
			   	<p class="card-text" style="padding-left:150px">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"</p>
			  
			   </div>
			</div>


			    <div class="row" style="margin-top:40px ">
                <div class="col-lg-12 col-12" style="">
			   	<img src="image/three.jpg" height="150" width="130" class="rounded-circle" style="float: left;margin-top: 40px;margin-left: 5px">
			    
			    
			   	<h5 class="card-title" style="padding-left:150px">Sweet, Sticky and Spicy Chicken</h5>
			   	<p class="card-text" style="padding-left:150px">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"</p>
			  
			   </div>
			</div>
		</div>
	</div>
</div>
          <!-- ==================
			Second Coloumn,
			MAINS
			====================== -->
		   <div class="col-lg-4 wow slideInUp ">
		   	  <div class="card">
		   	  	<div class="card" style="padding: 5px">
		   	   <h4 class="text-center" style="color: #9b030d">MAIN</h4>
		   	   <hr style="border: 0.5px solid #b7b2b2;width: 150px;margin-left: 85px" class="">
		   	    <div class="row">
                <div class="col-lg-12 col-12" style="">
			   	<img src="image/four.jpg" height="150" width="130" class="rounded-circle" style="float: left;margin-top: 40px;margin-left: 5px">
			    
			    
			   	<h5 class="card-title" style="padding-left:150px">Sweet, Sticky and Spicy Chicken</h5>
			   	<p class="card-text" style="padding-left:150px">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"</p>
			  
			   </div>
			</div>

			    <div class="row" style="margin-top: 40px">
                <div class="col-lg-12 col-12" style="">
			   	<img src="image/five.jpg" height="150" width="130" class="rounded-circle" style="float: left;margin-top: 40px;margin-left: 5px">
			    
			    
			   	<h5 class="card-title" style="padding-left:150px">Luxur Oyster</h5>
			   	<p class="card-text" style="padding-left:150px">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"</p>
			  
			   </div>
			</div>


			    <div class="row" style="margin-top:40px ">
                <div class="col-lg-12 col-12" style="">
			   	<img src="image/six.jpg" height="150" width="130" class="rounded-circle" style="float: left;margin-top: 40px;margin-left: 5px">
			    
			    
			   	<h5 class="card-title" style="padding-left:150px">Sweet, Sticky and Spicy Chicken</h5>
			   	<p class="card-text" style="padding-left:150px">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"</p>
			  
			   </div>
			</div>
		</div>
	</div>
</div>
         <!-- ==================
			Third Coloumn,
			DESSERT
			====================== -->
		   <div class="col-lg-4 wow slideInRight">
		   	  <div class="card">
		   	  	<div class="card" style="padding: 5px">
		   	   <h4 class="text-center" style="color: #9b030d">DESSERT</h4>
		   	   <hr style="border: 0.5px solid #b7b2b2;width: 150px;margin-left: 85px" class="">
		   	    <div class="row">
                <div class="col-lg-12 col-12" style="">
			   	<img src="image/seven.jpg" height="150" width="130" class="rounded-circle" style="float: left;margin-top: 40px;margin-left: 5px">
			    
			    
			   	<h5 class="card-title" style="padding-left:150px">Sweet, Sticky and Spicy Chicken</h5>
			   	<p class="card-text" style="padding-left:150px">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"</p>
			  
			   </div>
			</div>

			    <div class="row" style="margin-top: 40px">
                <div class="col-lg-12 col-12" style="">
			   	<img src="image/eight.jpg" height="150" width="130" class="rounded-circle" style="float: left;margin-top: 40px;margin-left: 5px">
			    
			    
			   	<h5 class="card-title" style="padding-left:150px">Luxur Oyster</h5>
			   	<p class="card-text" style="padding-left:150px">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"</p>
			  
			   </div>
			</div>


			    <div class="row" style="margin-top:40px ">
                <div class="col-lg-12 col-12" style="">
			   	<img src="image/nine.jpg" height="150" width="130" class="rounded-circle" style="float: left;margin-top: 40px;margin-left: 5px">
			    
			    
			   	<h5 class="card-title" style="padding-left:150px">Sweet, Sticky and Spicy Chicken</h5>
			   	<p class="card-text" style="padding-left:150px">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"</p>
			  
			   </div>
			</div>
		</div>
	</div>
  </div>
</div>
 <div class="row heading">
			 <div class="col-sm-12 col-lg-12 col-12 wow fadeInDown" style="margin-top: 30px !important;padding: 0px !important;">
			    <a href="" style="text-decoration: none" class="heading">
				     <hr class="line1" style=" width: 150px;height: 0px; border: 0.3px solid red;">
				     <h3 class="text-center" style="color:black;font-weight: 200!important;font-size: 44px">Event Gallery</h3>
				      <hr class="line1" style=" width: 150px;height: 3px; border: 0.3px solid red;">
				      <p class="content" style="color:black;">Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.</p>
			   </a>
			</div> 
		</div>
		<div class="row gallery">
			<div class="col-lg-3">
				<div class="card " style="background-color:black ">
					<a href="image/one.jpg" class="venobox" data-gall="myGallery" ><img class="card-img-top" src="image/one.jpg" height="160" /></a>
					<div class="card-body">
					<h4 class="card-title" style="color: white">Thundercats</h4>
					<p class="card-text" style="color: #847f7f">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then </p>	
					</div>
				</div>
			</div>
			<!-- <div id="gal1" style="display:none;">
				<img src="image/one.jpg">
            </div> -->
            <script type="text/javascript" >
            	
			$(document).ready(function(){
			$('.venobox').venobox();
			});
            </script>

			

						<div class="col-lg-3">
				<div class="card " style="background-color:black ">
					<a href=""><img class="card-img-top" src="image/two.jpg" height="160"></a>
					<div class="card-body">
					<h4 class="card-title" style="color: white">Thundercats</h4>
					<p class="card-text" style="color: #847f7f">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then </p>	
					</div>
				</div>
			</div>

						<div class="col-lg-3">
				<div class="card " style="background-color:black ">
					<a href=""><img class="card-img-top" src="image/three.jpg" height="160"></a>
					<div class="card-body">
					<h4 class="card-title" style="color: white">Thundercats</h4>
					<p class="card-text" style="color: #847f7f">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then </p>	
					</div>
				</div>
			</div>

						<div class="col-lg-3">
				<div class="card " style="background-color:black ">
					<a href=""><img class="card-img-top" src="image/four.jpg" height="160"></a>
					<div class="card-body">
					<h4 class="card-title" style="color: white">Thundercats</h4>
					<p class="card-text" style="color: #847f7f">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then </p>	
					</div>
				</div>
			</div>
		</div>

			<div class="row gallery" style="margin-top: 100px">
			<div class="col-lg-3">
				<div class="card " style="background-color:black ">
					<a href=""><img class="card-img-top" src="image/eight.jpg" height="160"></a>
					<div class="card-body">
					<h4 class="card-title" style="color: white">Thundercats</h4>
					<p class="card-text" style="color: #847f7f">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then </p>	
					</div>
				</div>
			</div>

						<div class="col-lg-3">
				<div class="card " style="background-color:black ">
					<a href=""><img class="card-img-top" src="image/seven.jpg" height="160"></a>
					<div class="card-body">
					<h4 class="card-title" style="color: white">Thundercats</h4>
					<p class="card-text" style="color: #847f7f">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then </p>	
					</div>
				</div>
			</div>

						<div class="col-lg-3">
				<div class="card " style="background-color:black ">
					<a href=""><img class="card-img-top" src="image/five.jpg" height="160"></a>
					<div class="card-body">
					<h4 class="card-title" style="color: white">Thundercats</h4>
					<p class="card-text" style="color: #847f7f">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then </p>	
					</div>
				</div>
			</div>

						<div class="col-lg-3">
				<div class="card " style="background-color:black ">
					<a href=""><img class="card-img-top" src="image/six.jpg" height="160"></a>
					<div class="card-body">
					<h4 class="card-title" style="color: white">Thundercats</h4>
					<p class="card-text" style="color: #847f7f">Pepperoni, mozzarella and Italian seasonings are rolled together, baked to delicious perfection, then </p>	
					</div>
				</div>
			</div>
		</div>

		<div class="row heading">
			 <div class="col-sm-12 col-lg-12 col-12 wow fadeInDown" style="margin-top: 30px !important;padding: 0px !important;">
			    <a href="" style="text-decoration: none" class="heading">
				     <hr class="line1" style=" width: 150px;height: 0px; border: 0.3px solid red;">
				     <h3 class="text-center" style="color:black;font-weight: 200!important;font-size: 44px">Hire Us</h3>
				      <hr class="line1" style=" width: 150px;height: 3px; border: 0.3px solid red;">
				      <p class="content" style="color:black;">Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.</p>
			   </a>
			</div> 
		</div>
  </div>
</div>
 



 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>