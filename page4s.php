<?php
$pageName = 'page5';
require("header.php");
?>
<div id="mainPanel" class="parallax page4s">

    <div class="container-12">
        <header>
			<h1>Congratulations, David!</h1>
			<h2>Our records indicate that we have your record on file.</h2>
		</header>
        <div id="fields">
				<form id="page4sForm" method="post" action="/gateway-1/" novalidate="novalidate">
					<label>*Minimum Loan Amount</label>
					<div class="fieldElement alpha selecter" id="amountField">
							<span class="validateField">
								<div class="customSelect">
									<select name="amt" id="amt">
								<!--AMOUNT_START-->
										<option value="">Loan Amount</option>
										<option value="100">$100</option>
										<option value="200">$200</option>
										<option value="300">$300</option>
										<option value="400">$400</option>
										<option value="500" selected="selected">$500</option>
										<option value="600" >$600</option>
										<option value="700" >$700</option>
										<option value="800" >$800</option>
										<option value="900" >$900</option>
										<option value="1000">$1000</option>
									<!--AMOUNT_END-->
									</select>
								</div>
							</span>
					</div>
					<div id="certifyField">
						<p><input type="checkbox" name="option" id="certifyCheckBox">
						<label for="certifyCheckBox">I certify that I am a U.S. Resident over the age of 18, I agree to the E-consent, <a href="javascript:{}" onclick="window.open('/privacy/', 'footer', 'width=500,height=400,scrollbars=yes,status=no,menubars=no');return false">Privacy Policy</a> &amp; <a href="javascript:{}" onclick="window.open('/terms/', 'footer', 'width=500,height=400,scrollbars=yes,status=no,menubars=no');return false">Terms of Use</a> and that I may receive special offers.</label></p>
					</div>
					<div class="clear-fix"></div> 
					<input type="submit" name="submit" value="Submit" class="submitBtn">
					<a href="#" class="editBtn">Edit/View Info</a>
					<input type="hidden" name="affId" value="">
					<input type="hidden" name="opt" value="">
					<input type="hidden" name="subc1" value="">
					<input type="hidden" name="subc2" value="">
					<input type="hidden" name="subc3" value="">
				</form>
			</div>
        <div class="clear"></div>   
    </div>            
</div>
<?php
require("footer.php");
?>