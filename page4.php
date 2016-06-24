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
					<div class="fieldElement omega" id="ssnField">
						<label class="grid-2 alpha" for="ssn">Last 4 # of SSN</label>
						<input type="text" name="ssn" id="ssn" placeholder="Last 4 of SSN" class="grid-4">
						<i class="fa fa-check"></i>
					</div>
					<div class="fieldElement" id="byField">
						<label class="grid-2 alpha" for="dobY" >Birth Year</label>
						<select name="dobY" id="dobY" value="" class="grid-4">
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