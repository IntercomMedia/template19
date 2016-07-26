<?php
$pageName = 'page5 page5s';
require("header.php");
?>
<div id="mainPanel" class="parallax page5s">
    <div class="container-12">
        <header>
	        <h1>We have your <br><strong>$100 - $1000</strong> <br>Cash Request Ready</h1>
        </header>
        <div class="action-column">
	        <h3>Click below to re-submit Your loan request</h3>
			<div id="certify">
						<p><input type="checkbox" name="option" id="certifyCheckBox">
						<label for="certifyCheckBox">I certify that I am a U.S. Resident over the age of 18, I agree to the <a href="javascript:{}" onclick="window.open('/e-consent/', 'footer', 'width=500,height=400,scrollbars=yes,status=no,menubars=no');return false">E-consent</a>, <a href="javascript:{}" onclick="window.open('/privacy/', 'footer', 'width=500,height=400,scrollbars=yes,status=no,menubars=no');return false">Privacy Policy</a> &amp; <a href="javascript:{}" onclick="window.open('/terms/', 'footer', 'width=500,height=400,scrollbars=yes,status=no,menubars=no');return false">Terms of Use</a> and that I may receive special offers.</label></p>
					</div>
			<div>
				<input type="submit" class="submitBtn" value="Submit">
			</div>
			<div>
				<input type="submit" class="editBtn" name="editr" value="Edit/View Info">
			</div>
			<input type="hidden" name="affId" value="">
			<input type="hidden" name="opt" value="">
			<input type="hidden" name="subc1" value="">
			<input type="hidden" name="subc2" value="">
        </div>
    </div>            
</div>
<div id="featuresPanel" class="page5s">
	    <div class="container-12">
	    	<h1>How Does it Work?</h1>
	        <div class="feature grid-4">
	        	<div class="inner">
	            	<i class="icon icon1"></i>
					<h2>Online Process</h2>
					<p>Our simple two-step form takes minutes to complete, which means you'll get the money you need in less time.</p>
	        	</div>
	        </div>
	        <div class="feature grid-4">
	        	<div class="inner">
	        		<?php if($ismobile) echo '<i class="icon icon2"></i>'; ?>
	        		
		            <h2>Quick Approval</h2>
		            <p>You can get approved for a loan regardless of your credit score or credit history!</p>
		            <?php if(!$ismobile) echo '<i class="icon icon2"></i>'; ?>
	            </div>
	        </div>
	        <div class="feature grid-4">
	            <div class="inner">
		            <i class="icon icon3"></i>
		            <h2>Get Your Funds</h2>
		            <p>Cash $100 - $1,000 will be wired to your back account by the next business day after approval.</p>
	            </div>
	        </div>
	    </div>
	    <div class="clear-fix"></div>   
	</div>
	<div class="prominent">
	    <div class="container-12">
	        <div class="grid-7">
	            <span class="icon iconCheck"></span><h1>Your Process is as Easy as <strong>1-2-3.</strong></h1>
	            <p class="largeFont">At <?php echo $siteName; ?> we have established one of the nation’s largest networks of lenders to help you get the funds you need for your short-term needs.</p>
	            <p>After you fill out the short and simple form on this website we work with our network of lenders to try and match you with the right lender for your loan at the best possible rates. If we are successful in matching you with a lender, you’ll see a page with a list of all the terms and conditions for the lender that we’ve determined is the best match for you. If you are unhappy with the terms of a loan from a lender you are under no obligation to continue on with the loan process. The best part is that we do not charge any fee to you for the use of our service.</p>
	        </div>
	    </div>
    </div>
<?php
require("footer.php");
?>