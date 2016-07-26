<?php
$pageName = 'home';
require("header.php");
?>
<div id="mainPanel-alt" class="parallax">
        <div class="background-img"></div>
		<div class="container-12 layout-start">
			<div class="grid-7 block-leader">
    			<header>
        			<p>Get an <em>installment loan</em> online</p>
    			    <h1>$100 to $1,000</h1>
    			</header>
			</div>
			<div id="fields" class="grid-5">
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
    		<div class="block-blurb">
        		<i class="icon">
        		    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        	 viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
                        <style type="text/css">
                        	.st0{fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                        </style>
                        <g class="icon-svg">
                        	<g>
                        		<g>
                        			<path d="M21.5,18h-21C0.2,18,0,17.8,0,17.5S0.2,17,0.5,17h21c0.3,0,0.5,0.2,0.5,0.5S21.8,18,21.5,18z"/>
                        		</g>
                        		<g>
                        			<path d="M18.5,26h-10C8.2,26,8,25.8,8,25.5S8.2,25,8.5,25h10c0.3,0,0.5,0.2,0.5,0.5S18.8,26,18.5,26z"/>
                        		</g>
                        		<g>
                        			<g>
                        				<path d="M28.5,26h-6c-0.8,0-1.5-0.7-1.5-1.5v-13c0-0.8,0.7-1.5,1.5-1.5h6c0.8,0,1.5,0.7,1.5,1.5v13C30,25.3,29.3,26,28.5,26z
                        					 M22.5,11c-0.3,0-0.5,0.2-0.5,0.5v13c0,0.3,0.2,0.5,0.5,0.5h6c0.3,0,0.5-0.2,0.5-0.5v-13c0-0.3-0.2-0.5-0.5-0.5H22.5z"/>
                        			</g>
                        			<g>
                        				<path d="M29.5,14h-8c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h8c0.3,0,0.5,0.2,0.5,0.5S29.8,14,29.5,14z"/>
                        			</g>
                        			<g>
                        				<path d="M29.5,23h-8c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h8c0.3,0,0.5,0.2,0.5,0.5S29.8,23,29.5,23z"/>
                        			</g>
                        		</g>
                        		<g>
                        			<path d="M21.5,22H3.1C1.4,22,0,20.6,0,18.9V7.1C0,5.4,1.4,4,3.1,4h20.7C25.6,4,27,5.4,27,7.1v3.4c0,0.3-0.2,0.5-0.5,0.5
                        				S26,10.8,26,10.5V7.1C26,6,25,5,23.9,5H3.1C2,5,1,6,1,7.1v11.7C1,20,2,21,3.1,21h18.4c0.3,0,0.5,0.2,0.5,0.5S21.8,22,21.5,22z"/>
                        		</g>
                        		<g>
                        			<path class="st0" d="M1.8,12.4"/>
                        		</g>
                        		<g>
                        			<path d="M26.5,17h-2c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h2c0.3,0,0.5,0.2,0.5,0.5S26.8,17,26.5,17z"/>
                        		</g>
                        		<g>
                        			<path d="M13.5,26c-0.3,0-0.5-0.2-0.5-0.5v-4c0-0.3,0.2-0.5,0.5-0.5s0.5,0.2,0.5,0.5v4C14,25.8,13.8,26,13.5,26z"/>
                        		</g>
                        	</g>
                        	<g>
                        		<path d="M26.5,20h-2c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h2c0.3,0,0.5,0.2,0.5,0.5S26.8,20,26.5,20z"/>
                        	</g>
                        	<g>
                        		<path d="M21.5,9h-16C5.2,9,5,8.8,5,8.5S5.2,8,5.5,8h16C21.8,8,22,8.2,22,8.5S21.8,9,21.5,9z"/>
                        	</g>
                        	<g>
                        		<path d="M18.5,13h-13C5.2,13,5,12.8,5,12.5S5.2,12,5.5,12h13c0.3,0,0.5,0.2,0.5,0.5S18.8,13,18.5,13z"/>
                        	</g>
                        </g>
                        </svg>
        		</i>
    			<header>
    			    <h2>How it Works</h2>
					<p>Complete our simple form and we will match your information with a lender. </p>
    			</header>
			</div>
			<div class="block-blurb">
    			<i class="icon">
        		    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                        <g  class="icon-svg">
                        	<g>
                        		<path d="M12,24c-3.032,0-5.5-2.467-5.5-5.5S8.968,13,12,13s5.5,2.467,5.5,5.5S15.032,24,12,24z M12,14c-2.481,0-4.5,2.019-4.5,4.5
                        			S9.519,23,12,23s4.5-2.019,4.5-4.5S14.481,14,12,14z"/>
                        	</g>
                        	<g>
                        		<path d="M13,12c-0.046,0-0.092-0.006-0.138-0.019c-0.141-0.041-0.257-0.141-0.317-0.274l-1-2.2c-0.06-0.132-0.06-0.283,0-0.414
                        			l4-8.8C15.627,0.112,15.852,0.017,16.006,0c0.197,0.002,0.376,0.121,0.454,0.303l3,7c0.095,0.221,0.018,0.479-0.183,0.613l-6,4
                        			C13.194,11.971,13.098,12,13,12z M12.549,9.3l0.663,1.458l5.165-3.443l-2.391-5.577L12.549,9.3z"/>
                        	</g>
                        	<g>
                        		<path d="M11,12c-0.098,0-0.194-0.029-0.277-0.084l-6-4c-0.2-0.134-0.277-0.392-0.183-0.613l3-7C7.619,0.119,7.8,0,8,0h8
                        			c0.17,0,0.328,0.086,0.42,0.229c0.093,0.143,0.105,0.323,0.035,0.478l-5,11c-0.061,0.133-0.177,0.233-0.317,0.274
                        			C11.092,11.994,11.046,12,11,12z M5.623,7.314l5.165,3.443L15.224,1H8.33L5.623,7.314z"/>
                        	</g>
                        	<g>
                        		<path d="M13.714,21.359c-0.104,0-0.206-0.032-0.294-0.096L12,20.232l-1.42,1.031c-0.176,0.128-0.412,0.128-0.588,0
                        			c-0.175-0.127-0.248-0.353-0.182-0.559l0.542-1.669l-1.419-1.032c-0.175-0.127-0.248-0.353-0.182-0.559
                        			c0.067-0.206,0.259-0.345,0.476-0.345h1.755l0.542-1.669c0.135-0.412,0.816-0.412,0.951,0l0.542,1.669h1.755
                        			c0.217,0,0.408,0.14,0.476,0.345c0.066,0.206-0.007,0.432-0.182,0.559l-1.419,1.032l0.542,1.669
                        			c0.066,0.206-0.007,0.432-0.182,0.559C13.92,21.327,13.817,21.359,13.714,21.359z M12,19.114c0.104,0,0.206,0.032,0.294,0.096
                        			l0.469,0.341l-0.179-0.552c-0.066-0.206,0.007-0.432,0.182-0.559l0.469-0.341h-0.58c-0.217,0-0.408-0.14-0.476-0.346L12,17.203
                        			l-0.179,0.55c-0.067,0.206-0.259,0.346-0.476,0.346h-0.58l0.469,0.341c0.175,0.127,0.248,0.353,0.182,0.559l-0.179,0.552
                        			l0.469-0.341C11.794,19.145,11.896,19.114,12,19.114z"/>
                        	</g>
                        	<g>
                        		<path d="M8,10c-0.068,0-0.137-0.014-0.203-0.043c-0.252-0.112-0.366-0.408-0.254-0.66l4-9c0.112-0.253,0.407-0.365,0.66-0.254
                        			c0.252,0.112,0.366,0.408,0.254,0.66l-4,9C8.374,9.89,8.191,10,8,10z"/>
                        	</g>
                        </g>
                        </svg>
        		</i>
    			<header>
        			<h2>Why Choose Us</h2>
					<p>We help you get the funds you need the most through our largest lender database</p>
    			</header>
			</div>
			<div class="block-blurb">
    			<i class="icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    	 viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
                    <g class="icon-svg">
                    	<g>
                    		<path d="M16,4c-0.3,0-0.5-0.2-0.5-0.5V1h-1v2.5C14.5,3.8,14.3,4,14,4s-0.5-0.2-0.5-0.5v-3C13.5,0.2,13.7,0,14,0h2
                    			c0.3,0,0.5,0.2,0.5,0.5v3C16.5,3.8,16.3,4,16,4z"/>
                    	</g>
                    	<g>
                    		<path d="M17,1h-4c-0.3,0-0.5-0.2-0.5-0.5S12.7,0,13,0h4c0.3,0,0.5,0.2,0.5,0.5S17.3,1,17,1z"/>
                    	</g>
                    	<g>
                    		<path d="M19,21c-0.1,0-0.3,0-0.4-0.1l-4-4c-0.1-0.1-0.1-0.2-0.1-0.4v-9C14.5,7.2,14.7,7,15,7s0.5,0.2,0.5,0.5v8.8l3.9,3.9
                    			c0.2,0.2,0.2,0.5,0,0.7C19.3,21,19.1,21,19,21z"/>
                    	</g>
                    	<g>
                    		<path d="M23,6c-0.1,0-0.3,0-0.4-0.1c-0.2-0.2-0.2-0.5,0-0.7l2-2c0.2-0.2,0.5-0.2,0.7,0s0.2,0.5,0,0.7l-2,2C23.3,6,23.1,6,23,6z"/>
                    	</g>
                    	<g>
                    		<path d="M15,30C7.6,30,1.5,23.9,1.5,16.5S7.6,3,15,3s13.5,6.1,13.5,13.5S22.4,30,15,30z M15,4C8.1,4,2.5,9.6,2.5,16.5
                    			S8.1,29,15,29s12.5-5.6,12.5-12.5S21.9,4,15,4z"/>
                    	</g>
                    </g>
                    </svg>
                </i>
    			<header>
        			 <h2>Fast Loan Approval</h2>
                     <p>If your request is approved, the lender will display approved amount, rates, fees, and terms.</p>
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