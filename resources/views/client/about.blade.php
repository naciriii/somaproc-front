@extends('master1')

@section('content')
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index">Accueil</a><span>/</span></li>
					<li><i class="fa fa-info-circle" aria-hidden="true"></i>À propos</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>À propos</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- about -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Why <span>Choose</span> Us</h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
			<div class="w3ls_news_grids"> 
				<div class="col-md-6 w3_agile_about_grid_left">
					<h3>Pellentesque a ligula nec dui ornare pulvinar in non sem condimentum erat</h3>
					<p><i>In eleifend nisl fermentum bibendum euismod. Pellentesque ac mi quis tortor 
						consequat scelerisque.</i> Sed eros urna, rhoncus nec tortor quis, pretium vestibulum
						purus. Nunc quis augue nibh. Proin non enim non nulla scelerisque scelerisque 
						vitae non est. Quisque iaculis leo at lacus malesuada mattis.</p>
				</div>
				<div class="col-md-6 w3_agile_about_grid_right">
					<div class="skillbar" data-percent="78">
					  <span class="skillbar-title" style="background: #f1703a;">Seeds</span>
					  <p class="skillbar-bar" style="background: #f88c5e;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="54">
					  <span class="skillbar-title" style="background: #2980b9;">Growth</span>
					  <p class="skillbar-bar" style="background: #3498db;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="76">
					  <span class="skillbar-title" style="background: #a0d034;">Economy</span>
					  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="80">
					  <span class="skillbar-title" style="background: #e7cc2c;">Planting</span>
					  <p class="skillbar-bar" style="background: #f5d410;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- skills -->
	<script src="js/skill.bars.jquery.js"></script>
	<script>
		$(document).ready(function(){
			
			$('.skillbar').skillBars({
				from: 0,
				speed: 4000, 
				interval: 100,
				decimals: 0,
			});
			
		});
	</script>
<!-- //skills -->
<!-- about-bottom -->
	<div class="about-bottom">
		<div class="container">
			<h3><span>Agriculture</span> not only gives riches to a nation, but the
				only riches she can call her own</h3>
			<div class="agileits_w3layouts_learn_more agileits_learn_more hvr-radial-out">
				<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
			</div>
		</div>
	</div>
<!-- //about-bottom -->
<!-- team -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Meet Our <span>Amazing</span> Team</h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
			<div class="w3ls_news_grids w3_agileits_team_grids"> 
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="images/10.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Andria Carl</h4>
					<p>Field Manager</p>
				</div>
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="images/11.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Laura Doe</h4>
					<p>Farmer</p>
				</div>
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="images/12.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Rosy Paul</h4>
					<p>Co-Founder</p>
				</div>
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="images/13.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Christopher Lii</h4>
					<p>Senior Staff</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
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