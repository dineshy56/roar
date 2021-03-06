<!DOCTYPE html>
<html lang="en">

<!-- ******************************************header****************************** -->
<?php
  	$this->load->view('common/header');
?>
<script type="text/javascript">
	$( document ).ready(function() {
		$("#homeActive").removeClass("active");
		$("#ridingRulesActive").removeClass("active");
		$("#aboutUsActive").addClass("active");
		$("#contactUsActive").removeClass("active");
	});
</script>
<!-- //****************************************header****************************** -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- *************************************navbar******************************* -->
	<?php
  		$this->load->view('common/navbar');
	?>
	<!--//*************************************navbar******************************* -->

	<!-- Container (About Section) -->
	<div class="container text-center">
		<div class="aboutus">
			
		    <br>
		    <div class="row">
		        <div class="col-sm-4"></div>
		        <div class="col-sm-4">
		            <img src="<?php echo base_url(); ?>assets/img/logo006.png">
		        </div>
		        <div class="col-sm-4"></div>
		    </div>
		    <br>

		    <h3>about Us</h3>
		    <p><em>We love music!</em>
		    </p>
		    <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure </p>
		    <br>

		    <h2>Core Mamber</h2>
		    <br>
		    <div class="row">
		        <div class="col-sm-4">
		            <p class="text-center"><strong>Name</strong>
		            </p>
		            <br>
		            <a href="#demo" data-toggle="collapse">
		                <img src="<?php echo base_url(); ?>assets/img/bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
		            </a>
		            <div>
		                <span class="imgHead">Guitarist and Lead Vocalist</span>
		                <p>Loves long walks on the beach Member since 1988</p>
		            </div>
		        </div>
		        <div class="col-sm-4">
		            <p class="text-center"><strong>Name</strong>
		            </p>
		            <br>
		            <a href="#demo2" data-toggle="collapse">
		                <img src="<?php echo base_url(); ?>assets/img/bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
		            </a>
		            <div>
		                <span class="imgHead">Guitarist and Lead Vocalist</span>
		                <p>Loves long walks on the beach Member since 1988</p>
		            </div>
		        </div>
		        <div class="col-sm-4">
		            <p class="text-center"><strong>Name</strong>
		            </p>
		            <br>
		            <a href="#demo3" data-toggle="collapse">
		                <img src="<?php echo base_url(); ?>assets/img/bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
		            </a>
		            <div>
		                <span class="imgHead">Guitarist and Lead Vocalist</span>
		                <p>Loves long walks on the beach Member since 1988</p>
		            </div>
		        </div>
		    </div>


		    <br>

		    <h2>Team</h2>


		    <br>
		    <div class="row">
		        <div class="col-sm-4">
		            <p class="text-center"><strong>Name</strong>
		            </p>
		            <br>
		            <a href="#demo" data-toggle="collapse">
		                <img src="<?php echo base_url(); ?>assets/img/bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
		            </a>
		            <div>
		                <span class="imgHead">Guitarist and Lead Vocalist</span>
		                <p>Loves long walks on the beach Member since 1988</p>
		            </div>
		        </div>
		        <div class="col-sm-4">
		            <p class="text-center"><strong>Name</strong>
		            </p>
		            <br>
		            <a href="#demo2" data-toggle="collapse">
		                <img src="<?php echo base_url(); ?>assets/img/bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
		            </a>
		            <div>
		                <span class="imgHead">Guitarist and Lead Vocalist</span>
		                <p>Loves long walks on the beach Member since 1988</p>
		            </div>
		        </div>
		        <div class="col-sm-4">
		            <p class="text-center"><strong>Name</strong>
		            </p>
		            <br>
		            <a href="#demo3" data-toggle="collapse">
		                <img src="<?php echo base_url(); ?>assets/img/bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
		            </a>
		            <div>
		                <span class="imgHead">Guitarist and Lead Vocalist</span>
		                <p>Loves long walks on the beach Member since 1988</p>
		            </div>
		        </div>
		    </div>
	    </div>
	</div>


    <!-- ************************Footer************************************* -->
    <?php
     	$this->load->view('common/footer');
    ?>
    <!-- //**********************Footer************************************** -->

    <script>
     	$(document).ready(function(){
           // Initialize Tooltip
           $('[data-toggle="tooltip"]').tooltip(); 
           
           // Add smooth scrolling to all links in navbar + footer link
           $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
           	
             // Make sure this.hash has a value before overriding default behavior
             if (this.hash !== "") {
             	
               // Prevent default anchor click behavior
               event.preventDefault();
               
               // Store hash
               var hash = this.hash;
               
               // Using jQuery's animate() method to add smooth page scroll
               // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
               $('html, body').animate({
               	scrollTop: $(hash).offset().top
               }, 900, function(){
               	
                 // Add hash (#) to URL when done scrolling (default click behavior)
                 window.location.hash = hash;
             });
             } // End if
         });
       })
   	</script>

</body>
</html>