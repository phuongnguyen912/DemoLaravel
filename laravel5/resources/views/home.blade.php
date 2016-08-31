
<!--<?php 
	if(DB::connection()->getDatabaseName()){
		echo "connection successful" .DB::connection()->getDatabaseName();
	}
?> -->
<!DOCTYPE html>
<html>
	<head>
		<title>BT</title>
		<meta charset="UTF-8">
		<link rel="stylesheet"  href="{{asset('public/css/style.css')}}">
		<link rel="stylesheet"  href="{{asset('public/css/reset.css')}}">
	</head>
	<body>
	<!--<h1>s</h1><h1>x</h1>
	<span>sdsd</span>-->
		<div id="wrapper">
			<div id="header">
				<div id="top_header" class="inner">
					<div class="logo fl_left">
						<a href="#"><img src="{{asset('public/image/logo.png')}}" alt=""/></a>
					</div>
					<div class="menu fl_right">
						<ul>
							<li><a href="#">Our Story</a></li>
							<li><a href="#">Menu</a></li>
							<li><a href="#">Reservations</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div id="second_header">
					<div class="inner">
						<div class="title">
							<image class="font" src="{{asset('public/image/font.png')}}"/>					
								<!--<image class="tt lines" src="images/line.png"/>-->
								<span class="lines"></span>
								<h2 class="tt">resto restaurant home page website template</h2>
								<span class="lines"></span>
						</div>
						<a class="icon_second_header" href="#"><img src="{{asset('public/image/icon_second_header.png')}}" alt=""/></a>
						<span id="vtri_title_memu">The Menu</span>
					</div>
				</div>
			</div>
			<!--end header-->
			<div id="main_content" class="inner">
				<div id="info_menu" class="clearfix">
					<div class="items">
						<div class="info_item fl_left">
							<h2>Voluptate cillum fugiat.</h2>
							<p>Cheese, tomato, mushrooms, onions.</p>
						</div>
						<div class="fl_right">
							<image class="fl_left anh" src="{{asset('public/image/ngan.png')}}" alt=""/>
							<p class="price fl_right">$50</p>
						</div>
					</div>
					<div class="items">
						<div class="info_item fl_left">
							<h2>Arcu pede enim justo.</h2>
							<p>Tuna, Sweetcorn, Cheese.</p>
						</div>
						<div class="fl_right">
							<image class="fl_left anh" src="{{asset('public/image/dai.png')}}" alt=""/>
							<p class="price fl_right">$45</p>
						</div>
					</div>
					<div class="items">
						<div class="info_item fl_left">
							<h2>Metus varius laoreet.</h2>
							<p>Chicken, mozzarella cheese, onions.</p>
						</div>
						<div class="fl_right">
							<image class="fl_left anh" src="{{asset('public/image/dai.png')}}" alt=""/>
							<p class="price fl_right">$62</p>
						</div>
					</div>
					<div class="items">
						<div class="info_item fl_left">
							<h2>Cras dapibussemper nisi.</h2>
							<p>Pineapple, Minced Beef, Cheese.</p>
						</div>
						<div class="fl_right">
							<image class="fl_left anh" src="{{asset('public/image/ngan.png')}}" alt=""/>
							<p class="price fl_right">$32</p>
						</div>
					</div>
					<div class="items">
						<div class="info_item fl_left">
							<h2>Donec sodales magna.</h2>
							<p>Tuna, Sweetcorn, Cheese.</p>
						</div>
						<div class="fl_right">
							<image class="fl_left anh" src="{{asset('public/image/ngan.png')}}" alt=""/>
							<p class="price fl_right">$25</p>
						</div>
					</div>
					<div class="items">
						<div class="info_item fl_left">
							<h2>Quam semper libero.</h2>
							<p>Cheese, tomato, mushrooms, onions.</p>
						</div>
						<div class="fl_right">
							<image class="fl_left anh" src="{{asset('public/image/dai.png')}}" alt=""/>
							<p class="price fl_right">$15</p>
						</div>
					</div>
					<div class="items">
						<div class="info_item fl_left">
							<h2>Saugue velit cursus.</h2>
							<p>Pineapple, Minced Beef, Cheese.</p>
						</div>
						<div class="fl_right">
							<image class="fl_left anh" src="{{asset('public/image/dai.png')}}" alt=""/>
							<p class="price fl_right">$30</p>
						</div>
					</div>
					<div class="items">
						<div class="info_item fl_left">
							<h2>Nam eget dui Etiam.</h2>
							<p>Chicken, mozzarella cheese, onions.</p>
						</div>
						<div class="fl_right">
							<image class="fl_left anh" src="{{asset('public/image/ngan.png')}}" alt=""/>
							<p class="price fl_right">$35</p>
						</div>
					</div>
					<div class="clearfix"></div>
					
					<a href="#" class="more">load more | v</a>
				</div>
				<div id="featured_dishes">
					<div class="name">
						<h2>Featured Dishes</h2>
						<image class="ngan" src="{{asset('public/image/ngan.png')}}" alt=""/>
					</div>
					<span class="controller_slider"></span>
					<div class="list_item_highlights clearfix">
						<div class="column">
							<div class="inner_1">
								<img src="{{asset('public/image/mon_1.png')}}" alt=""/>
								<div class="name_item">
									
									<p class="clearfix"><span class="fl_left">Fugiat nulla sint</span><span class="fl_right">$30</span></p>
									<image src="{{asset('public/image/rating_1.png')}}" alt=""/>
								</div>
							</div>
						</div>
						<div class="column fix1">
							<div class="inner_1">
								<img src="{{asset('public/image/mon_2.png')}}" alt=""/>
								<div class="name_item">
									<p class="clearfix"><span class="fl_left">Daute irure dolor</span><span class="fl_right">$24</span></p>
									
									<image src="{{asset('public/image/rating_2.png')}}" alt=""/>
								</div>
							</div>
						</div>
						<div class="column fix">
							<div class="inner_1">
								<img src="{{asset('public/image/mon_3.png')}}" alt=""/>
								<div class="name_item">
									
									<p class="clearfix"><span class="fl_left">Officia deserunt mollit</span><span class="fl_right">$60</span></p>
									<image src="{{asset('public/image/rating_3.png')}}" alt=""/>
								</div>
							</div>
						</div>
						<div class="column">
							<div class="inner_1">
								<img src="{{asset('public/image/mon_4.png')}}"alt=""/>
								<div class="name_item">
									
									<p class="clearfix"><span class="fl_left">Pim minim veniam</span><span class="fl_right">$17</span></p>
									<image src="{{asset('public/image/rating_4.png')}}" alt=""/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!---end feature dishes-->
				<div id="gallery">
					<div class="name">
						<h2>The Gallery</h2>
						<image class="ngan" src="{{asset('public/image/ngan.png')}}" alt=""/>
					
					</div>
					<div class="images_left">
						<image src="{{asset('public/image/mon_ngon.png')}}" alt=""/>
					</div>
					
				</div>
			</div>
			<!--end main_content-->
			<div id="footer">
				<div class="inner clearfix">
					<div class="child_footer">
						<p class="white">
							New York Restaurant<br>
							3926 Anmoore Road<br>
							New York, NY 10014<br>
							718 749 1714
						</p>
					</div>
					<div class="child_footer">
						<p class="white">
							France Restaurant<br>
							68, rue  de la Couronne<br>
							75002 PARIS<br>
							02 94 23 69 56
						</p>
					</div>
					<div class="child_footer">
						<p class="white">
							<ul class="menu_footer">
								<li><a href="#">Blog</a></li>
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</p>
					</div>
					<div class="child_footer">
						<image src="{{asset('public/image/logo_footer.png')}}" alt=""/>
						<p class="all_right">
							© All Rights Reserved 2014.<br>
							Find  More at Pixelhint.com
						</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>