<?php
$pageName = 'home';
require("header.php");
?>
<div id="mainPanel" class="parallax v3">
    <div class="container-12">
	    <div class="grid-5">
	        <div id="fields" class="fields-box">
		        	<div class="applyNow">
					    <label>Amount You Wish to Borrow</label>
					    <select name="amount" id="amount-field">
						    <option>Select</option>
					    </select>
				    </div>
					<form id="mainForm" method="post" action="/gateway-1/" novalidate="novalidate">
						<div class="fieldElement" id="zipField">
							<span class="icon"></span>
							<span class="validateField">
								<input type="text" name="zip" placeholder="Zip" value="">
								<span class="validateIcon"></span>
							</span>
						</div>
						<div class="fieldElement" id="birthyear">
							<span class="icon"></span>
							<span class="validateField customSelect">
								<select name="amount" id="by-field">
									<option>Birth Year</option>
									<option>1990</option>
									<option>1989</option>
									<option>1988</option>
									<option>1987</option>
									<option>1986</option>
									<option>1985</option>
									<option>1984</option>
									<option>1983</option>
			    				</select>
								<span class="validateIcon"></span>
							</span>
						</div>
						<div class="fieldElement" id="ssnField">
							<span class="icon"></span>
							<span class="validateField">
								<input type="text" name="ssn" placeholder="Last 4 of SSN#" value="">
								<span class="validateIcon"></span>
							</span>
						</div>
						<div class="clear-fix"></div>  
	     				<div id="certify">
							<p><input type="checkbox" name="option" id="certifyCheckBox">
							<label for="certifyCheckBox">I certify that I am a U.S. Resident over the age of 18, I agree to the <a href="javascript:{}" onclick="window.open('/privacy/', 'footer', 'width=500,height=400,scrollbars=yes,status=no,menubars=no');return false">Privacy Policy</a> &amp; <a href="javascript:{}" onclick="window.open('/terms/', 'footer', 'width=500,height=400,scrollbars=yes,status=no,menubars=no');return false">Terms of Use</a> and that I may receive special offers.</a></label></p>
						</div>
						<input type="submit" name="submit" value="Get Your Cash Now" class="submitBtn">
						<input type="hidden" name="affId" value="">
						<input type="hidden" name="opt" value="">
						<input type="hidden" name="subc1" value="">
						<input type="hidden" name="subc2" value="">
						<input type="hidden" name="subc3" value="">
					</form>
				</div>
	    	</div>
			<div class="grid-7">
		        <h1 class="title-small"><span>$100 to $1,000</span> <br/>
				<span>Cash Loans</span> <span>Smart, Quick &amp; Easy!</span></h1>
		        <ul>
		            <li><i class="fa"></i>Fast Online Process</li>
		            <li><span class="fa"></span>Direct Deposit to your account</li>
		            <li><span class="fa"></span>Flexible Payments</li>
		        </ul>
        	</div>
        <div class="clear"></div>   
    </div>            
</div>
	<div id="featuresPanel">
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
<article>
    	<div class="container-12"> 
			<h2>What is the APR I can expect for a loan I may get from Cash Loans ASAP?</h2>
			<p>Cash Loans ASAP is not a lender and does not provide short-term loans, but refers consumers who need these loans to lenders who provide them. Because Cash Loans ASAP does not provide consumers with loans directly, it is very difficult for us to provide you with an exact Annual Percentage Rate (APR) that you might expect to pay on a short-term loan. APR is meant to characterize both the interest rate and the fees associated with a loan for an entire year. The loan that you are likely to be offered by a referral from our site will be a short-term loan that should be repaid in a matter of weeks, so using an APR to describe the cost of the loan may seem misleading. That said, since APR is a well recognized standard for describing the cost of other types of loans, like mortgages, credit cards, or auto loans, we want to provide an APR for you to study that may help guide your assessment on whether a loan offered to you is the right fit. The APR may vary considerably between different loans and different consumers, and since Cash Loans ASAP is not a lender we can only provide a range of possible APR’s that our consumers might see from our lenders. The typical fees charged by a lender in our network for a $100 loan with a 14 day term range from $15 to $35. These fees translate to an <b>APR range of 200% to 2,500% for a 14 day loan</b>, depending on how the APR is calculated (nominal vs. effective) during the duration of the loan, what loan fees are incurred, late payment fees, loan renewal actions, along with other factors. Please keep in mind that the APR is not your finance charge, which will be disclosed later on by the lender.</p>
			
			<h2>If I accept a loan from a lender in your network, when can I expect to receive my funds?</h2>
			<p>One of the benefits of a short-term loan is that you can have your cash fast. Since we work with numerous lenders we can’t say specifically the time it takes to process a loan and transfer or ACH the funds to a customer account as it varies from lender to lender. Typically, the whole process should be complete and you will have your funds as soon as the next business day after you have been approved.</p>
			
			<h2>Can a short-term loan affect my credit?</h2>
			<p>Most lenders in the Cash Loans ASAP network typically do not consider your credit from Experian, Equifax, or Trans Union when determining if they will extend a loan offer to you. However, some lenders may use consumer credit reports or other personal information from alternative providers in order to make assess whether to extend a loan offer to you. If you do not repay your loan on time, your delinquent payment may be reported to a credit bureau, which could negatively impact your credit score. It is very important with short-term loans, as with any loan, that you repay the loan on time or contact the lender to agree on a modified repayment plan, if they offer one.</p>
			
			<h2>What happens if I don’t pay back the loan on time?</h2>
			
			<p>If we are successful in matching you with a lender, you accept their terms and conditions of the loan offer, and accept the loan, then you are agreeing to pay back the loan in the amount of time stated in your loan documents. If you partially repay the loan or do not pay off the loan at that time, this will likely result in additional fees. If you refuse to pay the loan then it is likely the lender will use a collections company to try and obtain payment of what you owe, just as any other lender for another type of loan product would. We encourage you not to take any loan that you cannot repay. Each lender renewal policies are different, and as a courtesy to their borrowers some may agree to alternative repayment plans. These options might include a “roll-over” of the loan that may incur additional fees and may renew automatically unless you specifically request otherwise. Please take the time to read the lender’s renewal policies, as well as the other terms and conditions they provide to you before accepting a loan offer. It is your responsibility to relay your repayment preferences to the lender prior to your acceptance of a loan offer. If you have any questions or need more information about the terms of a loan don’t hesitate to contact the lender and they will be happy to provide you with answers to your questions.</p>
			
			<h2>Can I renew a loan if I can’t pay it back on time?</h2>
			
			<p>Most loan renewal policies are governed by state laws and regulations. If it is offered by the lender, any loan renewal options will be presented to you by the lender before you accepting a loan. The loans offered by lenders in the Cash Loans ASAP network are designed to be short-term solutions to your financial difficulties. You should only take a loan you expect to be able to pay back in full and on time or you may incur late fees or other charges. If you do not believe you will be able to pay the loan back on time you should consider other alternatives before choosing a short-term loan.</p>
			
			<h2>What are the collection practices if I don’t pay back the loan?</h2>
			
			<p>Cash Loans ASAP is not a lender and does not perform any debt collection. The debt collection practices for the lender offering your loan will be disclosed in your loan documents. If you do not understand or have any questions about the collection practices used by a specific lender you should raise your concerns with the lender directly. Cash Loans ASAP has made reasonable efforts to only work with well recognized and trustworthy lenders who employ fair handling in their collections practices for past due accounts.</p>
</article>

<?php
require("footer.php");
?>