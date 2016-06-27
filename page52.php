<?php
$pageName = 'page5';
require("header.php");
?>
<div id="mainPanel" class="parallax page5 page52">
    <div class="container-12">
        <h1><span>$100-$1,000</span>
        <span>Our records indicate that we have your record on file. <br/>
Click below to submit for a Cash Loan.</span></h1>
        <ul>
            <li><i class="fa"></i>Fast Online Process</li>
            <li><span class="fa"></span>Direct Deposit to your account</li>
            <li><span class="fa"></span>Flexible Payments</li>
        </ul>
        
        <div class="clear"></div>  
        <div id="fields">
				<form id="page5Form" method="post" action="/gateway-1/" novalidate="novalidate">
					<div class="fieldElement alpha selecter" id="amountField">
							<span class="validateField">
								<div class="customSelect">
									<select name="amt" id="amt">
								<!--AMOUNT_START-->
										<option value="">Loan Amount</option>
										<option value="100">$100</option>
										<option value="200">$200</option>
										<option value="300" selected="selected">$300</option>
										<option value="400">$400</option>
										<option value="500">$500+</option>
									<!--AMOUNT_END-->
									</select>
								</div>
							</span>
					</div>
					
					<div class="fieldElement" id="ssnField">
						<span class="validateField">
							<input type="text" name="ssn" id="ssn" placeholder="Last 4 of SSN" value="">
							<span class="validateIcon"></span>
						</span>
					</div>
					<div class="fieldElement selecter omega" id="byField">
							<span class="validateField">
								<div class="customSelect">
									<select name="dobY" class="select_small_4" value="">
										<option value="">Birth Year</option>
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
										<option value="1930">1930</option>
										<option value="1929">1929</option>
									</select>
								</div>
							</span>
					</div>
					<div class="fieldElement alpha selecter" id="freqField">
						<span class="validateField">
							<div class="customSelect">
								<select name="freq" id="freq">
							<!--AMOUNT_START-->
									<option value="">Pay Frequency</option>
									<option value="100">$100</option>
									<option value="200">$200</option>
									<option value="300">$300</option>
									<option value="400">$400</option>
									<option value="500">$500+</option>
								<!--AMOUNT_END-->
								</select>
							</div>
						</span>
					</div>
					
					<div class="fieldElement" id="pdField">
						<span class="validateField">
							<input type="text" name="next_pay" id="next_pay" placeholder="Date of 1st Payday" value="">
						</span>
					</div>
					
					<div class="fieldElement omega" id="pd2Field">
						<span class="validateField">
							<input type="text" name="next_pay2" id="next_pay2" placeholder="Date of 2nd Payday" value="">
						</span>
					</div>
					<div class="clear-fix"></div> 
					<div id="certify">
						<p><input type="checkbox" name="option" id="certifyCheckBox">
						<label for="certifyCheckBox">I certify that I am a U.S. Resident over the age of 18, I agree to the <a href="javascript:{}" onclick="window.open('/e-consent/', 'footer', 'width=500,height=400,scrollbars=yes,status=no,menubars=no');return false">E-consent</a>, <a href="javascript:{}" onclick="window.open('/privacy/', 'footer', 'width=500,height=400,scrollbars=yes,status=no,menubars=no');return false">Privacy Policy</a> &amp; <a href="javascript:{}" onclick="window.open('/terms/', 'footer', 'width=500,height=400,scrollbars=yes,status=no,menubars=no');return false">Terms of Use</a> and that I may receive special offers.</label></p>
					</div>
					<input type="submit" name="submit" value="Get Your Cash Now" class="submitBtn">
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
<div id="infoPanels" class="parallax">
	<div id="featuresPanel">
	    <div class="container-12">
	        <div class="feature grid-4">
	        	<div class="inner">
	            	<i class="icon icon1"></i>
					<h2>Online Process</h2>
					<p>Our simple two-step form takes minutes to complete, which means you'll get the money you need in less time.</p>
	        	</div>
	        </div>
	        <div class="feature grid-4">
	        	<div class="inner">
	        		<i class="icon icon2"></i>
		            <h2>Quick Approval</h2>
		            <p>You can get approved for a loan regardless of your credit score or credit history!</p>
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
	    
	        <div class="clear"></div>   
	</div>
<?php
require("footer.php");
?>