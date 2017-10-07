<!DOCTYPE html>
<html>
<head>
<title>Himatif</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Career Builder Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css links -->
<link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{ asset ('css/slider.css')}}" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset ('css/facultystyle.css')}}" />
<link href="{{ asset ('css/style.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- /css links -->
 <link href='//fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
<script src="{{ asset ('js/SmoothScroll.min.js')}}"></script>
<script type="text/javascript" src="{{ asset ('js/modernizr.custom.js')}}"></script> 
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--here menu-->
 	@include('front_end.menu')

    	<div class="slider">
		
			<div  id="top" class="callbacks_container-wrap">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider1"></div>
					</li>
					<li>
						<div class="slider1 slider2"></div>
					</li>
					<li>
						<div class="slider1 slider3"></div>
					</li>
			</div>
		</div>
	<!-- /Banner -->
	<!-- About -->
	<section id="about">
	<div class="about">
	<div class="container">
		<div class="abouttop">
			<h3>PROFILE</h3>
			<label class="line"></label>
			<h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </h6>
			<div class="col-md-3 col-sm-3 aboutleft">
				<h4>IFSHOP</h4>
			</div>
			<div class="col-md-6 col-sm-6 aboutmiddle">
				<div class="aboutleftbottom">
					<p>Praesent dignissim viverra est, sed bibendum ligula congue non. Sed ac nisl et felis gravida commodo? Suspendisse eget ullamcorper ipsum. Suspendisse diam amet.</p>
					<a href="#"  data-toggle="modal" data-target="#myModal">EXPLORE</a>
			        <!-- Modal -->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
									</div>
								</div>
							</div>
						</div>
				</div>
				<img src="{{ asset ('images/bb3.jpg')}}">
			</div>
			<div class="col-md-3 col-sm-3 aboutright">
				<div class="aboutrighttop">
					<h2><b>OPREC HIMATIF</b></h1>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='200' data-delay='.5' data-increment="1">200</div>
						<label class="aline"></label>
						<p class="stats-info">HARI</p>
				</div>
				<div class="aboutrightbottom">
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='600' data-delay='.5' data-increment="5">600</div>
						<label class="aline"></label>
						<p class="stats-info">Faculty</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
	<div class="aboutbottom">
		<h3>EVENT</h3>
		<label class="line"></label>
		<div class="col-md-3 col-sm-3 aboutimg arrow">
			<img src="{{ asset ('images/b1.jpg')}}">
		</div>
		<div class="col-md-3 col-sm-3 abouttext">
			<h4>Library</h4>
			<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h5>
			<p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
			<a href="#" data-toggle="modal" data-target="#myModal1">EXPLORE</a>
			<!-- Modal -->
			<div class="modal fade" id="myModal1" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>Library</h4>
							<img src="{{ asset ('images/b1m.jpg')}}">
							<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-3 aboutimg arrow">
			<img src="{{ asset ('images/b2.jpg')}}">
		</div>
		<div class="col-md-3 col-sm-3 abouttext">
			<h4>Computer Lab</h4>
			<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h5>
			<p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
			<a href="#" data-toggle="modal" data-target="#myModal2">EXPLORE</a>
			<!-- Modal -->
			<div class="modal fade" id="myModal2" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>Computer Lab</h4>
							<img src="{{ asset ('images/b2m.jpg')}}">
							<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-3 abouttext">
			<h4>Conference Hall</h4>
			<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h5>
			<p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
			<a href="#" data-toggle="modal" data-target="#myModal3">EXPLORE</a>
			<!-- Modal -->
			<div class="modal fade" id="myModal3" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>Conference Hall</h4>
							<img src="{{ asset ('images/b3m.jpg')}}">
							<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						</div>
					</div>
				</div>
            </div>
		</div>
		<div class="col-md-3 col-sm-3 aboutimg arrow2">
			<img src="{{ asset ('images/b3.jpg')}}">
		</div>
		<div class="col-md-3 col-sm-3 abouttext">
			<h4>Play Ground</h4>
			<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h5>
			<p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>
			<a href="#" data-toggle="modal" data-target="#myModal4">EXPLORE</a>
			<!-- Modal -->
			<div class="modal fade" id="myModal4" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4>Play Ground</h4>
								<img src="{{ asset ('images/b4.jpg')}}">
								<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						</div>
					</div>
                </div>
            </div>
		</div>
		<div class="col-md-3 col-sm-3 aboutimg arrow2">
			<img src="{{ asset ('images/b4.jpg')}}">
		</div>
		<div class="clearfix"></div>
	</div>
	</div>
	<!-- Stats Section -->
<!-- Events Section -->
<div class="events" id="events">
	<div class="container">
        <h3>TODAY TECHNO</h3>
        <label class="line"></label>
		<h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </h6>
        <div class="col-md-6 col-sm-6 egrid">
			<div class="img">
			    <img src="{{ asset ('images/bl1.jpg')}}">
			</div>
		    <div class="textt">
			    <div class="date">
				    <h5>15 AUG</h5>
				</div>
			    <h3>SPORTS DAY</h3>
				<label class="eline"></label>
			    <p>Donec sed odio dui nulla vilae eli libem.Donec sed odio dui nulla vilae eli libem.</p>
				<a href="#" data-toggle="modal" data-target="#myModal5">READ MORE</a>
				<!-- Modal -->
				<div class="modal fade" id="myModal5" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4>Sports Day</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
        </div>
		<div class="col-md-6 col-sm-6 egrid">
			<div class="img">
			    <img src="{{ asset ('images/bl2.jpg')}}">
			</div>
			<div class="textt">
				<div class="date">
				    <h5>20 AUG</h5>
				</div>
			    <h3>ANNUAL DAY</h3>
				<label class="eline"></label>
			    <p>Donec sed odio dui nulla vilae eli libem.Donec sed odio dui nulla vilae eli libem.</p>
				<a href="#" data-toggle="modal" data-target="#myModal6"> READ MORE</a>
				<!-- Modal -->
				<div class="modal fade" id="myModal6" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4>Annual Day</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
        </div>
		<div class="col-md-6 col-sm-6 egrid">
			<div class="img">
			    <img src="{{ asset ('images/bl3.jpg')}}">
			</div>
			<div class="textt">
				<div class="date">
				    <h5>25 AUG</h5>
				</div>
				<h3>EXCURSION</h3>
				<label class="eline"></label>
				<p>Donec sed odio dui nulla vilae eli libem.Donec sed odio dui nulla vilae eli libem.</p>
				<a href="#" data-toggle="modal" data-target="#myModal7">READ MORE</a>
				<!-- Modal -->
				<div class="modal fade" id="myModal7" role="dialog">
					<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>Excursion</h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-6 col-sm-6 egrid">
			<div class="img">
			    <img src="{{ asset ('images/bl4.jpg')}}">
			</div>
			<div class="textt">
				<div class="date">
				    <h5>28 AUG</h5>
			    </div>
			    <h3>GRADUATION CEREMONY</h3>
				<label class="eline"></label>
				<p>Donec sed odio dui nulla vilae eli libem.Donec sed odio dui nulla vilae eli libem.</p>
				<a href="#" data-toggle="modal" data-target="#myModal8">READ MORE</a>
				<!-- Modal -->
			    <div class="modal fade" id="myModal8" role="dialog">
				    <div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4>Graduation Ceremony</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="clearfix"></div>
	</div>
	<!--<center><a href="#" class="textt">See More</a><center>-->
</div>

<!--// Events Section -->
<!--//@yield('banner')
@yield('content')-->
   <!--here footer-->
   @include('front_end.footer')

</body>
</html>
