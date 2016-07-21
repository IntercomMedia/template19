<?php
$pageName = 'home';
require("header.php");
?>
<div id="mainPanel-alt" class="alternate">
        <div class="background-img parallax alternate"></div>
		<div class="container-12 layout-start">
			<div class="grid-7 block-leader">
    			<header>
        			<p>Get an <em>installment loan</em> online</p>
    			    <h1>$100 to $1,000</h1>
    			</header>
			</div>
			<div id="fields" class="grid-5 alternate">
    			<h2><span>Start Here</span></h2>
				<form id="mainForm-alt" method="post" action="/gateway-1/" novalidate="novalidate" target="_blank">
					<div class="fieldElement alpha selecter" id="amountField">
						<span class="icon"></span>
						<span class="validateField">
							<div class="customSelect">
								<select id="amt" name="amt">
									<option value="">Loan Amount</option>
									<option value="100">$100</option>
<option value="200">$200</option>
<option value="300" selected="selected">$300</option>
<option value="400">$400</option>
<option value="500">$500+</option>

								</select>
							</div>
						</span>
					</div>
					
					<div class="fieldElement" id="zipField">
						<span class="icon"></span>
						<span class="validateField">
							<input type="text" id="zip" name="zip" placeholder="Zip" value="">
							<span class="validateIcon"></span>
						</span>
					</div>
					
					<div class="fieldElement" id="ssnField">
						<span class="icon"></span>
						<span class="validateField">
							<input type="text" id="ssn3" name="ssn3" placeholder="Last 4 of SSN#" value="">
							<span class="validateIcon"></span>
						</span>
					</div>
					<div class="fieldElement selecter omega" id="byField">
						<span class="icon"></span>
						<span class="validateField">
							<div class="customSelect">
								<select id="dobY" name="dobY" class="select_small_4">
									<option value="">Birth Year</option>
									<option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>

								</select>
							</div>
						</span>
					</div>
					
					<div class="fieldElement" id="emailField">
						<span class="icon"></span>
						<span class="validateField">
							<input type="text" id="email" name="email" placeholder="Email Address" value="">
							<span class="validateIcon"></span>
						</span>
					</div>
					
					<div class="clear-fix"></div>
					<div id="certify">
						<p><input type="checkbox" id="certifyCheckBox" name="option" value="1" CHECKED>
						<label for="certifyCheckBox">I certify that I am a U.S. Resident over the age of 18, I agree to the <a href="javascript:{}" onclick="window.open('/econsent/', 'footer', 'width=500,height=400,scrollbars=yes,status=no,menubars=no');return false">E-consent</a>, <a href="javascript:{}" onclick="window.open('/privacy/', 'footer', 'width=500,height=400,scrollbars=yes,status=no,menubars=no');return false">Privacy Policy</a> &amp; <a href="javascript:{}" onclick="window.open('/terms/', 'footer', 'width=500,height=400,scrollbars=yes,status=no,menubars=no');return false">Terms of Use</a> and that I may receive special offers.</a></label></p>
					</div>
					<input type="submit" class="submitBtn" name="submitb" value="Get Your Cash Now">
					<input type="hidden" id="affId" name="affId" value="">
					<input type="hidden" id="opt" name="opt" value="">
					<input type="hidden" id="subc1" name="subc1" value="">
					<input type="hidden" id="subc2" name="subc2" value="">
					<input type="hidden" id="subc3" name="subc3" value="">
					<input type="hidden" id="rep" name="rep" value="0">
					<input type="hidden" id="type" name="type" value="l">
				</form>
			</div>
			<div class="clear"></div>
		</div>
		<div class="layout-features">
    		<div class="block-blurb alternate">
        		<i class="icon">
        		    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 131 128"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><title>shutterstock_262793753</title><path class="cls-1 icon-svg" d="M41.25,40.09h0a8.37,8.37,0,0,1,11.49,2.7L64.46,61.73a8.32,8.32,0,0,1,3.76-5.35h0A8.37,8.37,0,0,1,79,58.11a8.35,8.35,0,0,1,3.93-6.51h0a8.37,8.37,0,0,1,10.78,1.73,8.35,8.35,0,0,1,3.93-6.51h0c3.9-2.42,9.28-1.32,11.49,2.7l16.22,29.62c13.19,24.08-12.27,55-37.86,43L43.09,101.17a8.37,8.37,0,0,1-4-11.11c3.87-2.4,12.21-3.47,16.39-1.5l8.41,4L38.55,51.58a8.37,8.37,0,0,1,2.7-11.49h0Z"/><path class="cls-1 icon-svg" d="M36.45,68.58A24.23,24.23,0,1,1,68.46,42"/><path class="cls-1 icon-svg" d="M26.68,84.07A42.39,42.39,0,1,1,85.44,34.76"/></svg>
        		</i>
    			<header>
    			    <h2>Online Process</h2>
                    <p>Our simple two-step form takes minutes to complete, which means you'll get the money you need in less time.</p>
    			</header>
			</div>
			<div class="block-blurb alternate">
    			<i class="icon">
        		    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 131 128"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><title>shutterstock_262793753</title>
        		        <line class="cls-1 icon-svg" x1="64.51" y1="52.45" x2="64.51" y2="59.93"/><line class="cls-1 icon-svg" x1="64.51" y1="92.55" x2="64.51" y2="100.03"/>
        		        <path class="cls-1 icon-svg" d="M75.36,63.83a48.91,48.91,0,0,0-9.67-2.57c-16.8-1.89-19,15-1.07,15,17.38-.05,15.74,16.89-1.1,15a49,49,0,0,1-9.65-2.57"/><path class="cls-1 icon-svg" d="M64.51,26.63A49.61,49.61,0,1,1,14.91,76.24,49.61,49.61,0,0,1,64.51,26.63h0Z"/>
        		        <line class="cls-1 icon-svg" x1="58.73" y1="26.63" x2="58.73" y2="15.4"/>
        		        <line class="cls-1 icon-svg" x1="70.3" y1="15.4" x2="70.3" y2="26.63"/>
        		        <polyline class="cls-1 icon-svg" points="96.36 37.14 108.83 24.66 116.09 31.92 103.62 44.4"/>
        		        <path class="cls-1 icon-svg" d="M51.55,2H77.48a2.25,2.25,0,0,1,2.24,2.24v7.63a2.25,2.25,0,0,1-2.24,2.24H51.55a2.25,2.25,0,0,1-2.24-2.24V4.24A2.25,2.25,0,0,1,51.55,2h0Z"/>
        		        <path class="cls-1 icon-svg" d="M64.51,36.79A39.45,39.45,0,1,1,25.07,76.24,39.45,39.45,0,0,1,64.51,36.79h0Z"/></svg>
        		</i>
    			<header>
        			<h2>Quick Approval</h2>
					<p>You can get approved for a loan regardless of your credit score or credit history!</p>
    			</header>
			</div>
			<div class="block-blurb alternate">
    			<i class="icon">
        		    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 131 128"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><title>shutterstock_262793753</title><polyline class="cls-1 icon-svg" points="33.06 24.93 33.06 127.16 97.94 127.16 97.94 24.93"/><path class="cls-1 icon-svg" d="M86.61,65c0-8.74-9.45-15.84-21.11-15.84S44.39,56.22,44.39,65,53.84,80.8,65.5,80.8,86.61,73.71,86.61,65h0Z"/><path class="cls-1" d="M95.08,104.5A19.53,19.53,0,0,0,75.55,124"/><path class="cls-1 icon-svg" d="M35.92,104.5A19.53,19.53,0,0,1,55.45,124"/><path class="cls-1 icon-svg" d="M69.59,96.67a4.09,4.09,0,1,0-4.09,4.09,4.09,4.09,0,0,0,4.09-4.09h0Z"/><path class="cls-1 icon-svg" d="M69.59,33.31A4.09,4.09,0,1,0,65.5,37.4a4.1,4.1,0,0,0,4.09-4.09h0Z"/><path class="cls-1 icon-svg" d="M98.43,41.19h10.09a4.06,4.06,0,0,0,4-4v-8.6a4.07,4.07,0,0,0-4-4h-86a4.08,4.08,0,0,0-4,4v8.6a4.07,4.07,0,0,0,4,4H32.56"/><path class="cls-1 icon-svg" d="M32.56,62.3H7.4a5.28,5.28,0,0,1-5.22-5.22v-51A5.24,5.24,0,0,1,7.4.84H123.6a5.28,5.28,0,0,1,5.22,5.22v51a5.32,5.32,0,0,1-5.22,5.22H98.43"/></svg>
        		</i>
    			<header>
        			 <h2>Get Your Funds</h2>
                     <p>Cash $100 - $1,000 will be wired to your back account by the next business day after approval.</p>
    			</header>
			</div>
		</div>
	</div>
	<div class="prominent alternative">
		<div class="container-12">
			<div class="grid-7">
				<span class="icon iconCheck"></span><h1>Your Process is as Easy as <strong>1-2-3.</strong></h1>
				<p class="largeFont">At Cash101 we have established one of the nation’s largest networks of lenders to help you get the funds you need for your short-term needs.</p>
				<p>After you fill out the short and simple form on this website we work with our network of lenders to try and match you with the right lender for your loan at the best possible rates. If we are successful in matching you with a lender, you’ll see a page with a list of all the terms and conditions for the lender that we’ve determined is the best match for you. If you are unhappy with the terms of a loan from a lender you are under no obligation to continue on with the loan process. The best part is that we do not charge any fee to you for the use of our service.</p>
			</div>
		</div>
	</div>
	<article>
		<div class="container-12">
			<h2>What is the APR I can expect for a loan I may get from Cash101?</h2>
			<p>Cash101 is not a lender and does not provide short-term loans, but refers consumers who need these loans to lenders who provide them. Because Cash101 does not provide consumers with loans directly, it is very difficult for us to provide you with an exact Annual Percentage Rate (APR) that you might expect to pay on a short-term loan. APR is meant to characterize both the interest rate and the fees associated with a loan for an entire year. The loan that you are likely to be offered by a referral from our site will be a short-term loan that should be repaid in a matter of weeks, so using an APR to describe the cost of the loan may seem misleading. That said, since APR is a well recognized standard for describing the cost of other types of loans, like mortgages, credit cards, or auto loans, we want to provide an APR for you to study that may help guide your assessment on whether a loan offered to you is the right fit. The APR may vary considerably between different loans and different consumers, and since Cash101 is not a lender we can only provide a range of possible APR’s that our consumers might see from our lenders. The typical fees charged by a lender in our network for a $100 loan with a 14 day term range from $15 to $35. These fees translate to an <b>APR range of 200% to 2,500% for a 14 day loan</b>, depending on how the APR is calculated (nominal vs. effective) during the duration of the loan, what loan fees are incurred, late payment fees, loan renewal actions, along with other factors. Please keep in mind that the APR is not your finance charge, which will be disclosed later on by the lender.</p>
			<h2>If I accept a loan from a lender in your network, when can I expect to receive my funds?</h2>
			<p>One of the benefits of a short-term loan is that you can have your cash fast. Since we work with numerous lenders we can’t say specifically the time it takes to process a loan and transfer or ACH the funds to a customer account as it varies from lender to lender. Typically, the whole process should be complete and you will have your funds as soon as the next business day after you have been approved.</p>
			<h2>Can a short-term loan affect my credit?</h2>
			<p>Most lenders in the Cash101 network typically do not consider your credit from Experian, Equifax, or Trans Union when determining if they will extend a loan offer to you. However, some lenders may use consumer credit reports or other personal information from alternative providers in order to make assess whether to extend a loan offer to you. If you do not repay your loan on time, your delinquent payment may be reported to a credit bureau, which could negatively impact your credit score. It is very important with short-term loans, as with any loan, that you repay the loan on time or contact the lender to agree on a modified repayment plan, if they offer one.</p>
			<h2>What happens if I don’t pay back the loan on time?</h2>
			<p>If we are successful in matching you with a lender, you accept their terms and conditions of the loan offer, and accept the loan, then you are agreeing to pay back the loan in the amount of time stated in your loan documents. If you partially repay the loan or do not pay off the loan at that time, this will likely result in additional fees. If you refuse to pay the loan then it is likely the lender will use a collections company to try and obtain payment of what you owe, just as any other lender for another type of loan product would. We encourage you not to take any loan that you cannot repay. Each lender renewal policies are different, and as a courtesy to their borrowers some may agree to alternative repayment plans. These options might include a “roll-over” of the loan that may incur additional fees and may renew automatically unless you specifically request otherwise. Please take the time to read the lender’s renewal policies, as well as the other terms and conditions they provide to you before accepting a loan offer. It is your responsibility to relay your repayment preferences to the lender prior to your acceptance of a loan offer. If you have any questions or need more information about the terms of a loan don’t hesitate to contact the lender and they will be happy to provide you with answers to your questions.</p>
			<h2>Can I renew a loan if I can’t pay it back on time?</h2>
			<p>Most loan renewal policies are governed by state laws and regulations. If it is offered by the lender, any loan renewal options will be presented to you by the lender before you accepting a loan. The loans offered by lenders in the Cash101 network are designed to be short-term solutions to your financial difficulties. You should only take a loan you expect to be able to pay back in full and on time or you may incur late fees or other charges. If you do not believe you will be able to pay the loan back on time you should consider other alternatives before choosing a short-term loan.</p>
			<h2>What are the collection practices if I don’t pay back the loan?</h2>
			<p>Cash101 is not a lender and does not perform any debt collection. The debt collection practices for the lender offering your loan will be disclosed in your loan documents. If you do not understand or have any questions about the collection practices used by a specific lender you should raise your concerns with the lender directly. Cash101 has made reasonable efforts to only work with well recognized and trustworthy lenders who employ fair handling in their collections practices for past due accounts.</p>
		</div>
	</article>
<?php
require("footer.php");
?>