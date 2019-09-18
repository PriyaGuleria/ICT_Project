
<body>
<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; 2019 Uniwise. All Rights Reserved | Developed by
					<a href="#"> JCU Team </a>
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!--jQuery-->
    <script src="js/jquery-2.2.3.min.js"></script>
    <?= $this->Html->script('js/jquery-2.2.3.min.js') ?>
	<!-- newsletter modal -->
	<!-- Modal -->
	<!-- Modal -->
	<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<h6>Join our newsletter and get</h6>
					<h3>50% Off for your first Pair of Eye wear</h3>
					<div class="login newsletter">
						<form action="#" method="post">
							<div class="form-group">
								<label class="mb-2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="" required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Get 50% Off</button>
						</form>
						<p class="text-center">
							<a href="#">No thanks I want to pay full Price</a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$("#myModal").modal();
		});
	</script>-->
	<!-- // modal -->

	<!--search jQuery-->
	
    <?= $this->Html->script('js/modernizr-2.6.2.min.js') ?>

    <?= $this->Html->script('js/classie-search.js') ?>
    <?= $this->Html->script('js/demo1-search.js') ?>
	<!--//search jQuery-->
	<!-- cart-js -->
    
    <?= $this->Html->script('js/minicart.js') ?>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- Count-down -->
	<script src="js/simplyCountdown.js"></script>
    <link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />

	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					900: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>

	<!-- //end-smooth-scrolling -->


	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
  <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

	<script src="js/bootstrap.js"></script>
	<!-- js file -->
</body>

   <?= $this->Html->script('js/bootstrap') ?>
   <?= $this->Html->script('js/classie-search') ?>
   <?= $this->Html->script('js/creditly') ?>
   <?= $this->Html->script('js/demo1-search') ?>
   <?= $this->Html->script('js/easing') ?>
   <?= $this->Html->script('js/easy-responsive-tabs') ?>
   <?= $this->Html->script('js/imagezoom') ?>
   <?= $this->Html->script('js/jquery.easing.min') ?>
   <?= $this->Html->script('js/jquery.flexslider') ?>
   <?= $this->Html->script('js/jquery.magnific-popup') ?>
   <?= $this->Html->script('js/jquery-2.2.3.min') ?>
   <?= $this->Html->script('js/jquery-ui') ?>
   <?= $this->Html->script('js/minicart') ?>
   <?= $this->Html->script('js/modernizr-2.6.2.min') ?>
   <?= $this->Html->script('js/move-top') ?>
   <?= $this->Html->script('js/owl.carousel') ?>
   <?= $this->Html->script('js/simplyCountdown') ?>
<!--footer -->

</html>