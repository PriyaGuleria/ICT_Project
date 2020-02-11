<!DOCTYPE html>
<html lang="en" >
<head>
</head>
<body>
<?= $this->Flash->render()?>
<?php foreach($items as $key=>$item){ ?>
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">Checkout </h3>
				<div class="checkout-right">
					<h4>Checkout Product with Cash on Delivery 
						<span></span>
					</h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Product Name</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody>
							<tr class="rem1">
								<td class="invert">1</td>
								<td class="invert-image">
									<a href="single.html">
										<img src="<?php echo $this->Url->image("../".$item->itemimage); ?>" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert"><?= $item->itemname  ?> </td>
								<td class="invert">$<?= $item->itemprice?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="checkout-left row">
					<div class="col-md-4 checkout-left-basket">
						<h4 style="background:grey;color:white;">Bill</h4>
						<ul>
							<li><?= $item->itemname  ?>
								<i>-</i>
								<span>$<?= $item->itemprice ?> </span>
							</li>
						
							<li>Total
								<i>-</i>
								<span>$<?= $item->itemprice ?></span>
							</li>
						</ul>
					</div>
					<div class="col-md-8 address_form">
						<h4>Add a new Details</h4>
                  
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
                               
									<div class="first-row form-group">
                                      <?php
                                        echo $this->Form->create(
                                            null,
                                            [ 
                                                "url"=>["action"=>"savecheckout"]
                                              
                                            ]
                                        );
                                    ?>
										<div class="controls">
                                        <input type="hidden" name="proiduct_id" value="<?= $item->Itemid  ?>">
                                        <input type="hidden" name="product_name" value="<?= $item->itemname  ?>">
                                        <input type="hidden" name="total_amount" value="<?= $item->itemprice  ?>">
											<label class="control-label">Full name: </label>
											<input class="billing-address-name form-control" type="text" name="cust_name" placeholder="Full name">
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Mobile number:</label>
													<input class="form-control" name="cust_number" type="text" placeholder="Mobile number">
												</div>
											</div>
											<div class="card_number_grid_right">
												<div class="controls">
													<label class="control-label">Landmark: </label>
													<input class="form-control" name="cust_landmark" type="text" placeholder="Landmark">
												</div>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="controls">
											<label class="control-label">Town/City: </label>
											<input class="form-control" name="cust_city" type="text" placeholder="Town/City">
										</div>
										<div class="controls">
											<label class="control-label">Address type: </label>
											<select name="address_type" class="form-control option-w3ls">
												<option>Office</option>
												<option>Home</option>
												<option>Commercial</option>
											</select>
										</div>
									</div>
                                    <input class="form-control" type="submit" value="Submit">
                                  
								</div>
							</section>
                            </form>
					</div>
                    
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
</body>