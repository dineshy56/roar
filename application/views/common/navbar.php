	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#myPage" ></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li id="homeActive"><a href="<?php echo site_url('home/index'); ?>">HOME</a></li>
					<li id="ridingRulesActive"><a href="<?php echo site_url('home/ridingRules'); ?>">RIDING-RULES</a></li>
					<li id="aboutUsActive"><a href="<?php echo site_url('home/aboutUs'); ?>">ABOUT</a></li>
					<li id="contactUsActive"><a href="<?php echo site_url('home/contactUs'); ?>">CONTACT</a></li>
                  <!-- <li><a href="#contact">CONTACT</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="#">Merchandise</a></li>
                        <li><a href="#">Extras</a></li>
                        <li><a href="#">Media</a></li>
                     </ul>
                 </li> -->
                 <!-- <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> -->
	            </ul>
	        </div>
	    </div>
	</nav>