<!DOCTYPE html>
<?= $this->Flash->render()?>
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<div class="about-content py-lg-5 py-3">
					<div class="row">

						<div class="col-lg-6 p-0">
							<img src="<?php echo $this->request->webroot; ?>img/unibanner3.jpg" alt="Banner " class="img-fluid" style="width: 727px;height:430px ">
						</div>
						<div class="col-lg-6 about-info">
							<h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">About Us</h3>
							<p class="my-xl-4 my-lg-3 my-md-4 my-3"><b>Our Company:</b>
								The Uniwise Computer Shop has been established for over 5 years and continues to provide an excellent level of service and support to all our customers.<br>
								<b>Our Commitment:</b>
								In UNIWISE we believe in customer satisfaction and strive to succeed in this.
								When you deal with one of our technicians, you're dealing with a genuine computing enthusiast.
								You will experierince the advantage of working with someone who understands that every person or businesses needs are unique and we can work with you to fix an issue or create a new solution.
								The truth is that we understand how important a reliable computer is in this modern world, and we have all the tools required to provide just that.
							</p>
							<a href="<?php echo $this->Url->build(["controller"=>"user","action"=>"shop"]);?>" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</div>
					</div>
				</div>
				<!--/meddle-->
				<div class="row" style="background:maroon;">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info ">
							<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3"></h3>
							<div class="simply-countdown-custom" id="simply-countdown-custom"></div>
						</div>
					</div>
				</div>
				<!--//meddle-->
				<div class="simply-countdown-custom" id="simply-countdown-custom"></div>
				<!-- /testimonials -->
				<div class="testimonials py-lg-4 py-3 mt-4">
					<div class="testimonials-inner py-lg-4 py-3">
						<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Tesimonials</h3>
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="testimonials_grid text-center">
										<h3>Anamaria
											<span>Customer</span>
										</h3>
										<label>Chennai</label>
										<p>Just bought gaming laptop from uniwise, totally satisfied experience great customer service.</p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="testimonials_grid text-center">
										<h3>Esmeralda
											<span>Customer</span>
										</h3>
										<label>Delhi</label>
										<p>24/7 Customer support, replaced many internal parts without change for one year.</p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="testimonials_grid text-center">
										<h3>Gretchen
											<span>Customer</span>
										</h3>
										<label>Mumbai</label>
										<p>Best in electronics specially for computers and workstations.</p>
									</div>
								</div>
								<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="fas fa-long-arrow-alt-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- //testimonials -->
				<div class="testimonials p-lg-5 p-3 mt-4">
					<div class="row last-section">
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fa fa-gift"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Uniwise For Genuine Product</h3>
								<p>Shop with uniwise and get genuine products</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fa fa-shield"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Uniwise For Secure Products</h3>
								<p>Shop with uniwise and get secured certified products</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fa fa-dollar"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Uniwise For Cash on Delivery</h3>
								<p>Shop with uniwise and get benifit of COD</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fa fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Uniwise For Easy Delivery</h3>
								<p>Shop with uniwise and get easy delivery track</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //clients-sec -->
			</div>
		</div>
	</section>


