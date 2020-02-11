<!DOCTYPE html>
<?= $this->Flash->render()?>
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Contact</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">We love to discuss your idea</p>
				<div class="address row">
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fa fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Address</h6>
								<p> tirupati, India
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:info@uniwise.com"> info@uniwise.com </a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fa fa-mobile"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Phone</h6>
								<p>+1 234 567 899</p>
							</div>
						</div>
					</div>
				</div>
				<div class="contact_grid_right">
				<?php
					echo $this->Form->create(
						null,
						[
							"url"=>["action"=>"savecontacts"]
						]
					);
				?>
				<div class="row contact_left_grid">
					<div class="col-md-6 con-left">
						<div class="form-group">
							<label class="my-2">Name</label>
							<input class="form-control" type="text" name="guestname" placeholder="" required="">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input class="form-control" type="email" name="guestemail" placeholder="" required="">
						</div>
						<div class="form-group">
							<label class="my-2">Contact Number</label>
							<input class="form-control" type="text" name="guestcontact" placeholder="" required="">
						</div>
					</div>
					<div class="col-md-6 con-right">
						<div class="form-group">
							<label>Message</label>
							<textarea id="textarea" placeholder="" name="guestmessage" required=""></textarea>
						</div>
						<input class="form-control" type="submit" value="Submit">
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
	</section>
	<div class="contact-map">
		<iframe src="https://maps.google.com/maps?q=sivajyothi%20nagar%2C%20tirupati%2C%20andra%20pradesh&t=&z=13&ie=UTF8&iwloc=&output=embed"
		    class="map" style="border:0" allowfullscreen=""></iframe>
	</div>
