<!DOCTYPE html>
<html lang="en">

<!-- ******************************************header****************************** -->
<?php
  	$this->load->view('common/header');
?>
<script type="text/javascript">
	$( document ).ready(function() {
		$("#homeActive").removeClass("active");
		$("#ridingRulesActive").addClass("active");
		$("#aboutUsActive").removeClass("active");
		$("#contactUsActive").removeClass("active");
	});
</script>

<style type="text/css">
	.ridingRulesSideLogo{
		background-image: url('<?php echo base_url(); ?>assets/img/royalGroupStanding.jpg');
		height: 400px;
		width: 100%;
	}
</style>
<!-- //****************************************header****************************** -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- *************************************navbar******************************* -->
	<?php
  		$this->load->view('common/navbar');
	?>
	<!--//*************************************navbar******************************* -->
	<!-- Container (Contact Section) -->
	<div id="contact" class="container ">
		<div class="aboutus">
		<div class="row">
		        <div class="col-sm-4"></div>
		        <div class="col-sm-4">
		            <img src="<?php echo base_url(); ?>assets/img/logo006.png">
		        </div>
		        <div class="col-sm-4"></div>
		    </div>
			<h3 class="text-center">Riding Rules</h3>
			<p class="text-center"><em><!-- We love our fans! --></em></p>

			<div class="row">
				<div class="col-md-6">
					<ul>
						<li> wear a helmet</li>
						<li> wear a helmet</li>
						<li> wear a helmet</li>
						<li> wear a helmet</li>
						<li> wear a helmet</li>
						<li> wear a helmet</li>
						<li> wear a helmet</li>
						<li> wear a helmet</li>
						<li> wear a helmet</li>
					</ul>
				</div>

				<div class="col-md-6" >
					<div class="ridingRulesSideLogo">
						
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