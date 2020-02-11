<?php foreach($items as $key=>$item){ ?>
<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
					
											<ul class="slides">
												<li data-thumb="<?php echo $this->Url->image("../".$item->itemimage); ?>">
													<div class="thumb-image"> <img src="<?php echo $this->Url->image("../".$item->itemimage); ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h3><?= $item->itemname  ?></h3>
									<p><span class="item_price">$<?= $item->itemprice?></span>
										<del>$0,000</del>
									</p>
									Category:<p><?= $item->itemcategory ?> </p>
									<div class="occasional">
									Description:<p><?= $item->itemdescription ?></p>
									Warranty:<p><?= $item->itemwarranty ?> Years</p>
										<div class="clearfix"> </div>
									</div>
								<!--<div class="occasion-cart">
											<div class="googles single-item singlepage">
													<form action="#" method="post">
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="googles_item" value="Farenheit">
														<input type="hidden" name="amount" value="575.00">
														<button type="submit" class="googles-cart pgoogles-cart">
															Add to Cart
														</button>
														
													</form>
		
												</div>
									</div>-->
					
	<a style="   background: grey;
	text-align:center;
    padding: 10px 50px;
    border: none;
    color: #FFF;
    cursor: pointer;
    font-size: 16px;
    display: block;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-appearance: none;
    outline: none;
    letter-spacing: 1px;
    text-decoration: none;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    -ms-border-radius: 4px;
    -moz-border-radius: 4px;" href="<?php echo $this->Url->build(["controller"=>"user","action"=>"checkout?id=$item->Itemid"]);?>">Checkout</a>
									
								</div>
								<div class="clearfix"> </div>
					</div>
				</div>
			</div>
<?php } ?>