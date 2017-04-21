
@extends('master1')

@section('content')
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Germinate
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index">Accueil</a><span>/</span></li>
					<li><i class="fa fa-cogs" aria-hidden="true"></i>Produits</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>Produits</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<div class="content">
		<div class="project-section wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
			<div class="container">
			
				<div class="port-grids">
				<div class="port1">
				<div class="col-md-4 port-grid">
<a href="images/p10.jpg" class="swipebox"><img src="images/p10.jpg" class="img-responsive" alt="" /></a>
					</div>
				<div class="col-md-4 port-grid">
<a href="images/p11.jpg" class="swipebox"><img src="images/p11.jpg" class="img-responsive" alt="" /></a>
						
				</div>
				<div class="col-md-4 port-grid">
<a href="images/p12.jpg" class="swipebox"><img src="images/p12.jpg" class="img-responsive" alt="" /></a>
						
				</div>
				<div class="clearfix"></div>
				</div>
				<div class="port2">
				<div class="col-md-4 port-grid">
<a href="images/p13.jpg" class="swipebox"><img src="images/p13.jpg" class="img-responsive" alt="" /></a>
			</div>
				<div class="col-md-4 port-grid">
<a href="images/p14.jpg" class="swipebox"><img src="images/p14.jpg" class="img-responsive" alt="" /></a>
						
				</div>
				<div class="col-md-4 port-grid">
<a href="images/p15.jpg" class="swipebox"><img src="images/p15.jpg" class="img-responsive" alt="" /></a>
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="port3">
				<div class="col-md-4 port-grid">
<a href="images/p16.jpg" class="swipebox"><img src="images/p16.jpg" class="img-responsive" alt="" /></a>					
					
				</div>
				<div class="col-md-4 port-grid">
<a href="images/p17.jpg" class="swipebox"><img src="images/p17.jpg" class="img-responsive" alt="" /></a>						
					
				</div>
				<div class="col-md-4 port-grid">
<a href="images/p18.jpg" class="swipebox"><img src="images/p18.jpg" class="img-responsive" alt="" /></a>						
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				</div>
			</div>
			</div>
	</div>

<!-- //testimonials -->
<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
  </script>
<!-- //flexSlider -->

<!-- menu -->
	<script>
		$(function() {
			
			initDropDowns($("div.shy-menu"));

		});

		function initDropDowns(allMenus) {

			allMenus.children(".shy-menu-hamburger").on("click", function() {
				
				var thisTrigger = jQuery(this),
					thisMenu = thisTrigger.parent(),
					thisPanel = thisTrigger.next();

				if (thisMenu.hasClass("is-open")) {

					thisMenu.removeClass("is-open");

				} else {			
					
					allMenus.removeClass("is-open");	
					thisMenu.addClass("is-open");
					thisPanel.on("click", function(e) {
						e.stopPropagation();
					});
				}
				
				return false;
			});
		}
	</script>
<!-- //menu -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

@stop