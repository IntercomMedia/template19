<?php
$pageName = 'page2 page4';
$page2Form =true;
include("header.php");
?>
    <div id="congratulationsPanel" class="">
    	<div class="container-12">
    		<div class="grid-9">
    			<div class="inner">
					<h1>Welcome back, [John Figa]! </h1>
					<p>Our records indicate that we have your record on file. Click below to submit for a $100 - $1,000 Cash Loan from our National Lenders Database.</p>
    			</div>
    		</div>
    	</div>
    </div>
    <div id="content" class="page2 container-12">
        <div class="fieldsCol grid-7">
            <form method="post" id="page4Form">
                <div class="errors"></div>
					<div class="fieldElement alpha selecter" id="amountField">
							<label class="grid-2 alpha" for="amt">Loan Amount</label>
							<select name="amt" id="amt" class="grid-4">
						<!--AMOUNT_START-->
								<option value="">Loan Amount</option>
								<option value="100">$100</option>
								<option value="200">$200</option>
								<option value="300" selected="selected">$300</option>
								<option value="400">$400</option>
								<option value="500">$500+</option>
							<!--AMOUNT_END-->
							</select>
						<i class="fa fa-check"></i>
					</div>
					<div class="fieldElement omega selecter" id="freqField">
						<label class="grid-2 alpha" for="freq">Pay Frequency</label>
						<select name="freq" id="freq" class="grid-4">
					<!--AMOUNT_START-->
							<option value="">Pay Frequency</option>
							<option value="100">$100</option>
							<option value="200">$200</option>
							<option value="300">$300</option>
							<option value="400">$400</option>
							<option value="500">$500+</option>
						<!--AMOUNT_END-->
						</select>
						<i class="fa fa-check"></i>
					</div>
					
					<div class="fieldElement" id="pdField">
						<label class="grid-2 alpha" for="next_pay">Date of 1st Payday</label>
						<input type="text" name="next_pay" id="next_pay" placeholder="Date of 1st Payday" value="" class="grid-4">
						<i class="fa fa-check"></i>
					</div>
					
					<div class="fieldElement omega" id="pd2Field">
						<label class="grid-2 alpha" for="next_pay2">Date of 2nd Payday</label>
						<input type="text" name="next_pay2" id="next_pay2" placeholder="Date of 2nd Payday" value=""class="grid-4" >
						<i class="fa fa-check"></i>
					</div>
					<div class="clear-fix"></div>
					<div class="spacer grid-2 alpha">&nbsp;</div>
					
					<div style="text-align: center;" class="grid-4">
						<input type="submit" name="submit" value="Get Your Cash Now" class="submitBtn">
						<div class="clear-fix"></div>
						<a href="#" class="editBtn">Edit/View Info</a>
					</div>
            </form>
        </div>
    </div><?php

    include("footer.php"); ?>