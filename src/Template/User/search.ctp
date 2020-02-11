<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
<div class="container-fluid">
<div class="inner-sec-shop px-lg-4 px-3">
<h3 class="tittle-w3layouts my-lg-4 mt-3">Popular In Uniwise</h3>
<div class="row">
<!-- product left -->
<div class="side-bar col-lg-3">
<div class="search-hotel">
	<h3 class="agileits-sear-head">Search Here..</h3>
	<form action="#" method="post">
			<input class="form-control" type="search" name="search" placeholder="Search here..." required="">
			<button class="btn1">
					<i class="fa fa-search"></i>
			</button>
			<div class="clearfix"> </div>
		</form>
</div>
	<!-- deals -->
	<div class="deal-leftmk left-side">
		<h3 class="agileits-sear-head">Special Deals</h3>
		<div class="special-sec1">
			<div class="img-deals">
				<img src="<?php echo $this->Url->image("D3.jpg"); ?>" alt="">
			</div>
			<div class="img-deal1">
				<h3>Desktops</h3>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="special-sec1">
			<div class="col-xs-4 img-deals">
				<img src="<?php echo $this->Url->image("L3.jpg"); ?>" alt="">
			</div>
			<div class="col-xs-8 img-deal1">
 				<h3>Laptops</h3>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="special-sec1">
			<div class="col-xs-4 img-deals">
				<img src="<?php echo $this->Url->image("a3.jpg"); ?>" alt="">
			</div>
			<div class="col-xs-8 img-deal1">
				<h3>Accessories</h3>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="special-sec1">
				<div class="col-xs-4 img-deals">
					<img src="<?php echo $this->Url->image("console.jpg"); ?>" alt="">
				</div>
				<div class="col-xs-8 img-deal1">
					<h3>Consoles</h3>
				</div>
				<div class="clearfix"></div>
			</div>
	</div>
	<!-- //deals -->
</div>
<div class="left-ads-display col-lg-9">
<div class="wrapper_top_shop">
<div class="row">
<div class="col-md-6 shop_left">
<?php echo $this->Html->image('lap1.jpg'); ?>
		<h6>40% off</h6>
	</div>
	<div class="col-md-6 shop_right">
	<?php echo $this->Html->image('laptop2.jpg'); ?>
		<h6>50% off</h6>
	</div>
</div>               
<div class="slider-img mid-sec mt-lg-5 mt-2">
<!--//banner-sec-->
<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Our Products</h3>
<div class="mid-slider">
<div class="owl-carousel owl-theme row">
<?php
foreach($items as $key=>$item){ ?>
<div class="item">
	<div class="gd-box-info text-center">
		<div class="product-men women_two bot-gd">
			<div class="product-googles-info slide-img googles">
				<div class="men-pro-item">
					<div class="men-thumb-item">
						<img src="<?php echo $this->Url->image("../".$item->itemimage); ?>" class="img-fluid" alt=""> 
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="#" class="link-product-add-cart">Quick View</a>
							</div>
						</div>
					</div>
					<div class="item-info-product">
						<div class="info-product-price">
							<div class="grid_meta">
								<div class="product_price">
									<h4>
										<a href="<?php echo $this->Url->build(["controller"=>"user","action"=>"details?id=$item->Itemid"]);?>"><?= $item->itemname  ?> </a>
									</h4>
									<div class="grid-price mt-2">
										<span class="money ">$<td><?= $item->itemprice  ?></td></span>
									</div> 
								</div>		
							</div>
							<div class="googles single-item hvr-outline-out">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="googles_item" value="<?= $item->itemname  ?>">
									<input type="hidden" name="amount" value="<?= $item->itemprice  ?>">
									<button type="submit" class="googles-cart pgoogles-cart">
									<i class="fa fa-cart-plus"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
</div>
</div>
</div>
<!--//slider-->
</div>
</div>
</section>