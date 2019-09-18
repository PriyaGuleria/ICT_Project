<!DOCTYPE html>
<html>
<head> 
<title>Uniwise</title>
  <?= $this->Html->css('style1.css') ?>
   <?= $this->Html->css('css/bootstrap.css') ?>
   <?= $this->Html->css('css/login_overlay.css') ?>
   <?= $this->Html->css('css/style6.css') ?>
   <?= $this->Html->css('css/shop.css') ?>
   <?= $this->Html->css('css/owl.carousel.css') ?>
   <?= $this->Html->css('css/owl.theme.css') ?>
   <?= $this->Html->css('css/fontawesome-all.min.css') ?>
 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Need Help</h6>
					<ul>
						<li>
							<i class="fa fa-phone"></i> Call</li>
						<li class="number-phone mt-3">1234567899</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.html">
							UNIWISE </a>
					</h1>
				</div>
				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									My Cart
									<i class="fa fa-cart-arrow-down"></i>
								</button>
							</form>
						</li>
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Login Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="#" method="post">
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
									<div class="form-check mb-2">
									</div>
								
									<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
									<button type="reset" class="btn btn-primary submit mb-4">Clear</button>
								</form>
							</div>
	
						</div>
					</div>
			
						</div>
					</div>
				</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fa fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form action="#" method="post" class="d-flex">
						<input class="form-control" type="search" placeholder="Search here..." required="">
						<button type="submit" class="btn btn-primary submit">
							<i class="fa fa-search"></i>
						</button>
					</form>

				</div>
		
				
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="<?php echo $this->Url->build(["controller"=>"user","action"=>"index"]);?>">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Features
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Desktops </h5>
											<div class="media-mini mt-3">
												<a href="#">
												<?php echo $this->HTML->image('laptop2.jpg'); ?>
												</a>
											</div>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Laptops </h5>
											<div class="media-mini mt-3">
												<a href="#">
												<?php echo $this->HTML->image('lap1.jpg'); ?>
												</a>
											</div>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Accessories </h5>
											<div class="media-mini mt-3">
												<a href="#">
												<?php echo $this->HTML->image('laptop4.png'); ?>
												</a>
											</div>
										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Shop
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Brands </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="<?php echo $this->Url->build(["controller"=>"user","action"=>"shop"]);?>">Hewlett Packard</a>

												</li>
												<li class="media-mini mt-3">
													<a href="<?php echo $this->Url->build(["controller"=>"user","action"=>"shop"]);?>">Hewlett Packard</a>

												</li>
												<li class="media-mini mt-3">
													<a href="<?php echo $this->Url->build(["controller"=>"user","action"=>"shop"]);?>">Lenovo</a>

												</li>
												<li class="media-mini mt-3">
													<a href="<?php echo $this->Url->build(["controller"=>"user","action"=>"shop"]);?>">Dell</a>

												</li>

												<li class="media-mini mt-3">
													<a href="<?php echo $this->Url->build(["controller"=>"user","action"=>"shop"]);?>">Asus</a>

												</li>
												<li class="media-mini mt-3">
													<a href="<?php echo $this->Url->build(["controller"=>"user","action"=>"shop"]);?>">Apple</a>

												</li>
												<li class="media-mini mt-3">
													<a href="<?php echo $this->Url->build(["controller"=>"user","action"=>"shop"]);?>">Razer</a>

												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Catagories </h5>
											<ul>
												<li class="media-mini mt-3">

													<a href="<?php echo $this->Url->build(["controller"=>"user","action"=>"shop"]);?>">Gaming Laptops</a>
												</li>
											</ul>
											<ul class="sub-in text-left">

												<li>
													<a href="<?php echo $this->Url->build(["controller"=>"user","action"=>"shop"]);?>">Creators Laptops</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">

											<h5 class="tittle-w3layouts-sub-nav">Exclusive Product </h5>
											<div class="media-mini mt-3">
												<a href="<?php echo $this->Url->build(["controller"=>"user","action"=>"shop"]);?>">
												<?php echo $this->HTML->image('lap1.jpg'); ?>
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Login
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text" style="margin-left:450px;">
											<h5 class="tittle-w3layouts-sub"> Login Options </h5>
											<ul>
												<li class="button-log">
													<a class="btn-open" href="#">
														<span class="fa fa-user" aria-hidden="true"> Existing User</span>
													</a>
												</li>
												<li class="button-log">
													<a class="btn-open" href="#">
														<span class="fa fa-user" aria-hidden="true"> New User</span>
													</a>
												</li>
												
											</ul>
										</div>
									</li>
					</ul>

				</div>
			</nav>
		</header>
</body>