<div class="container-fluid footer">
		<div class="container">
			<div class="row ">
				<div class="col-md-3 text-center footer-one">
					<h4>WITED</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt. <a href="">Read More</a></p>
						<p style="font-size: 18px">
							<a href="" class="text-decoration-none mx-2"><i class="fab fa-facebook-square"></i></a>
							<a href="" class="text-decoration-none mx-2"><i class="fab fa-twitter"></i></a>
							<a href="" class="text-decoration-none mx-2"><i class="fab fa-linkedin"></i></a>
							<a href="" class="text-decoration-none mx-2"><i class="fab fa-google-plus-g"></i></a>
							<a href="" class="text-decoration-none mx-2"><i class="fas fa-rss-square"></i></a>
						</p>
					</div>					
					<div class="col-md-3 footer-two">
						<h5 class="mb-3 pl-0 ml-0">By Specialty</h5>
						<ul style="margin-left: 15px;">
							<li class="my-2"><a href="" class="text-decoration-none text-dark">Contact Us</a></li>
							<li class="my-2"><a href="" class="text-decoration-none text-dark">Careers @ Amentojourn</a></li>
							<li class="my-2"><a href="" class="text-decoration-none text-dark">Get Help And Support</a></li>
							<li class="my-2"><a href="" class="text-decoration-none text-dark">Rights & Permissions</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-three">
						<h5 class="mb-3 pl-0 ml-0">Resources</h5>
						<ul style="margin-left: 15px;">
							<li class="my-2"><a href="" class="text-decoration-none text-dark">Authors</a></li>
							<li class="my-2"><a href="" class="text-decoration-none text-dark">Librarians</a></li>
							<li class="my-2"><a href="" class="text-decoration-none text-dark">Sponsors & Advertisers</a></li>
							<li class="my-2"><a href="" class="text-decoration-none text-dark">Press & Media</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-four">
						<h5 class="mb-3">Get in Touch</h5>
						<ul>
							<li><i class="fas fa-phone mr-2 my-2"></i> +234 (0) 906 543 9542</li>
							<li><i class="fas fa-phone mr-2 my-2"></i> +234 (0) 803 713 3216</li>
							<li><i class="fas fa-envelope mr-2 my-2"></i> fpiwitedjournal2020@gmail.com</li>
						</ul>
					</div>
				</div>
				<hr class="mb-0 pb-0" style="border: 0.5px solid lightgray; width: 100%; margin-top: 3%">
			</div>
		</div>
		<div class="container-fluid copyright pt-2">
			<div class="row">
				<div class="col-md-12 py-2">
					<p class="text-center">&copy; 2020 WITED. All Rights Reserved</p>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="lib/owl/js/owl.carousel.js"></script>
		<script type="text/javascript">
			$(function(){
				$('.editorial-pick').owlCarousel({
					loop:true,
					margin:10,
					nav:true,
					dots: false,
					navText: [
					'<i class="fas fa-angle-left" aria-hidden="true"></i>',
					'<i class="fas fa-angle-right" aria-hidden="true"></i>'
					],
					navContainer: '.custom-nav',
					autoplay:true,
					autoplayTimeout:10000,
					autoplayHoverPause:true,
					responsive:{
						0:{
							items:1
						},
						600:{
							items:1
						},
						1000:{
							items:1
						}
					}
				});
				$('.volume').owlCarousel({
					loop:true,
					margin:10,
					nav:true,
					dots: false,
					navText: [
					'<i class="fas fa-angle-left" aria-hidden="true"></i>',
					'<i class="fas fa-angle-right" aria-hidden="true"></i>'
					],
					navContainer: '.custom-navv',
				// autoplay:true,
				autoplayTimeout:10000,
				autoplayHoverPause:true,
				responsive:{
					0:{
						items:2
					},
					600:{
						items:3
					},
					1000:{
						items:5
					}
				}
			})
			})
		</script>
	</body>
	</html>