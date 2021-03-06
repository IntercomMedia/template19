<?php
$pageName = 'page2';
$page2Form =true;
include("header.php");
?>
    <div id="congratulationsPanel" class="">
    	<div class="container-12">
    		<div class="grid-9">
    			<div class="inner">
    				<div class="icon iconClock"></div>
					<h1>Congratulations!</h1>
					<p>Complete the form below to <strong>secure your loan.</strong></p>
					<div class="completionContainer">
						<div class="completion"><span></span></div>
					</div>
    			</div>
    		</div>
    	</div>
    </div>
    <div id="content" class="page2 container-12">
        <div class="fieldsCol grid-9">
            <form method="post" id="page2Form">
                <div class="errors"></div>
                <section id="personalStep" class="fieldSection">
                    <header>
	                    <div>
	                        <h1>Step 1</h1>
	                        <h2>Tell us about yourself</h2>
	                    </div>
                    </header>

                    <div id="first_name_field" class="fieldElement required">
                        <label for="fname" class="grid-2 alpha">Your Name:</label>
                        <input type="text" id="fname" name="fname" size="25" value="" placeholder="First Name" class="grid-2">
                        <input type="text" id="lname" name="lname" size="25" value="" placeholder="Last Name" class="grid-3 omega">
                        <i class="fa fa-check"></i>
                    </div>

                    <div id="address_field" class="fieldElement required">
                        <label for="address1" class="grid-2 alpha">Street Address:</label>
                        <input type="text" id="address1" name="address1" size="25" value="" placeholder="Ex: 123 Main St." class="grid-5">
                        <div class="clear-fix"></div>
                        <label class="spacer grid-2 alpha">&nbsp;</label>
                        <input type="text" id="city" name="city" size="25" value="" placeholder="City" class="grid-2"/>
                        <select id="state" name="state" class="grid-1">
                            <option value="">
                                State
                            </option>

                            <option label="AK" value="AK">
                                AK
                            </option>

                            <option label="AL" value="AL">
                                AL
                            </option>

                            <option label="AR" value="AR">
                                AR
                            </option>

                            <option label="AZ" value="AZ">
                                AZ
                            </option>

                            <option label="CA" value="CA">
                                CA
                            </option>

                            <option label="CO" value="CO">
                                CO
                            </option>

                            <option label="CT" value="CT">
                                CT
                            </option>

                            <option label="DC" value="DC">
                                DC
                            </option>

                            <option label="DE" value="DE">
                                DE
                            </option>

                            <option label="FL" value="FL">
                                FL
                            </option>

                            <option label="GA" value="GA">
                                GA
                            </option>

                            <option label="HI" value="HI">
                                HI
                            </option>

                            <option label="IA" value="IA">
                                IA
                            </option>

                            <option label="ID" value="ID">
                                ID
                            </option>

                            <option label="IL" value="IL">
                                IL
                            </option>

                            <option label="IN" value="IN">
                                IN
                            </option>

                            <option label="KS" value="KS">
                                KS
                            </option>

                            <option label="KY" value="KY">
                                KY
                            </option>

                            <option label="LA" value="LA">
                                LA
                            </option>

                            <option label="MA" value="MA">
                                MA
                            </option>

                            <option label="MD" value="MD">
                                MD
                            </option>

                            <option label="ME" value="ME">
                                ME
                            </option>

                            <option label="MI" value="MI">
                                MI
                            </option>

                            <option label="MN" value="MN">
                                MN
                            </option>

                            <option label="MO" value="MO">
                                MO
                            </option>

                            <option label="MS" value="MS">
                                MS
                            </option>

                            <option label="MT" value="MT">
                                MT
                            </option>

                            <option label="NC" value="NC">
                                NC
                            </option>

                            <option label="ND" value="ND">
                                ND
                            </option>

                            <option label="NE" value="NE">
                                NE
                            </option>

                            <option label="NH" value="NH">
                                NH
                            </option>

                            <option label="NJ" value="NJ">
                                NJ
                            </option>

                            <option label="NM" value="NM">
                                NM
                            </option>

                            <option label="NV" value="NV">
                                NV
                            </option>

                            <option label="NY" value="NY">
                                NY
                            </option>

                            <option label="OH" value="OH">
                                OH
                            </option>

                            <option label="OK" value="OK">
                                OK
                            </option>

                            <option label="OR" value="OR">
                                OR
                            </option>

                            <option label="PA" value="PA">
                                PA
                            </option>

                            <option label="RI" value="RI">
                                RI
                            </option>

                            <option label="SC" value="SC">
                                SC
                            </option>

                            <option label="SD" value="SD">
                                SD
                            </option>

                            <option label="TN" value="TN">
                                TN
                            </option>

                            <option label="TX" value="TX">
                                TX
                            </option>

                            <option label="UT" value="UT">
                                UT
                            </option>

                            <option label="VA" value="VA">
                                VA
                            </option>

                            <option label="VT" value="VT">
                                VT
                            </option>

                            <option label="WA" value="WA">
                                WA
                            </option>

                            <option label="WI" value="WI">
                                WI
                            </option>

                            <option label="WV" value="WV">
                                WV
                            </option>

                            <option label="WY" value="WY">
                                WY
                            </option>
                        </select>
                        <input type="text" id="zip" name="zip" size="25" value="" placeholder="Zip" class="grid-2 omega"/>
                        <i class="fa fa-check"></i>
                    </div>

                    <div id="phone_field" class="fieldElement required toolTippers">
                        <label for="phone" class="grid-2 alpha">Phone #:</label>
                        <input type="text" id="phone" name="phone" value="" class="grid-2">
                        <input type="text" id="phone2" name="phone2" value="" class="grid-1">
                        <input type="text" id="phone3" name="phone3" value="" class="grid-2 omega">
                        <i class="fa fa-check"></i>
                        <a href="#" class="whatsThis fa" title="whyThis"></a>
                        <div class="toolTip" id="whyThis"><i class="fa"></i>
                        	<p><strong>Why do we require this?</strong><br>
                            Many of our lenders will quickly confirm your request by phone. The faster they can reach you, the quicker your funds will arrive!</p>
                        </div>
                    </div>
                    
                    <div id="mphone_field" class="fieldElement">
                        <label for="mphone" class="grid-2 alpha">Mobile Phone #:</label>
                        <input type="text" id="mphone" name="mphone" value="" class="grid-2"/>
                        <input type="text" id="mphone2" name="mphone2" value="" class="grid-1"/>
                        <input type="text" id="mphone3" name="mphone3" value="" class="grid-2 omega"/>
                    </div>

                    <div id="email_field2" class="fieldElement required">
                        <label for="email" class="grid-2 alpha">Your Email:</label>
                        <input type="text" id="email" name="email" size="25" value="" class="grid-5 omega"/>
                        <i class="fa fa-check"></i>
                    </div>

                    <div id="dob_field" class="fieldElement required">
                        <label for="dobM" class="grid-2 alpha">DOB:</label> 
                        <select name="dobM" id="dobM" class="grid-1">
                            <option value="">MM</option>
                            <option label="01" value="01">
                                01
                            </option>
                            <option label="02" value="02">
                                02
                            </option>

                            <option label="03" value="03">
                                03
                            </option>

                            <option label="04" value="04">
                                04
                            </option>

                            <option label="05" value="05">
                                05
                            </option>

                            <option label="06" value="06">
                                06
                            </option>

                            <option label="07" value="07">
                                07
                            </option>

                            <option label="08" value="08">
                                Aug
                            </option>

                            <option label="09" value="09">
                                09
                            </option>

                            <option label="10" value="10">
                                10
                            </option>

                            <option label="11" value="11">
                                11
                            </option>

                            <option label="12" value="12">
                                12
                            </option>
                        </select>
                        <select name="dobD" class="grid-2">
	                        <option value="">
	                            DD</option>
	
	                        <option label="01" value="01">
	                            01</option>
	
	                        <option label="02" value="02">
	                            02</option>
	
	                        <option label="03" value="03">
	                            03</option>
	
	                        <option label="04" value="04">
	                           04</option>
	
	                        <option label="05" value="05">
	                            05</option>
	
	                        <option label="6" value="06">
	                            06</option>
	
	                        <option label="07" value="07">
	                            07</option>
	
	                        <option label="08" value="08">
	                            08</option>
	
	                        <option label="09" value="09">
	                            09</option>
	
	                        <option label="10" value="10">
	                            10</option>
	
	                        <option label="11" value="11">
	                            11</option>
	
	                        <option label="12" value="12">
	                            12</option>
	
	                        <option label="13" value="13">
	                            13</option>
	
	                        <option label="14" value="14">
	                            14</option>
	
	                        <option label="15" value="15">
	                            15</option>
	
	                        <option label="16" value="16">
	                            16</option>
	
	                        <option label="17" value="17">
	                            17</option>
	
	                        <option label="18" value="18">
	                            18</option>
	
	                        <option label="19" value="19">
	                            19</option>
	
	                        <option label="20" value="20">
	                            20</option>
	
	                        <option label="21" value="21">
	                            21</option>
	
	                        <option label="22" value="22">
	                            22</option>
	
	                        <option label="23" value="23">
	                            23</option>
	
	                        <option label="24" value="24">
	                            24</option>
	
	                        <option label="25" value="25">
	                            25</option>
	
	                        <option label="26" value="26">
	                            26</option>
	
	                        <option label="27" value="27">
	                            27</option>
	
	                        <option label="28" value="28">
	                            28</option>
	
	                        <option label="29" value="29">
	                            29</option>
	
	                        <option label="30" value="30">
	                            30</option>
	
	                        <option label="31" value="31">
	                            31</option>
	                    </select>
	                    <select name="dobY" class="grid-2 omega">
						        <option value="">YYYY</option>
						
						        <option label="1994" value="1994">
						            1994</option>
						
						        <option label="1993" value="1993">
						            1993</option>
						
						        <option label="1992" value="1992">
						            1992</option>
						
						        <option label="1991" value="1991">
						            1991</option>
						
						        <option label="1990" value="1990">
						            1990</option>
						
						        <option label="1989" value="1989">
						            1989</option>
						
						        <option label="1988" value="1988">
						            1988</option>
						
						        <option label="1987" value="1987">
						            1987</option>
						
						        <option label="1986" value="1986">
						            1986</option>
						
						        <option label="1985" value="1985">
						            1985</option>
						
						        <option label="1984" value="1984">
						            1984</option>
						
						        <option label="1983" value="1983">
						            1983</option>
						
						        <option label="1982" value="1982">
						            1982</option>
						
						        <option label="1981" value="1981">
						            1981</option>
						
						        <option label="1980" value="1980">
						            1980</option>
						
						        <option label="1979" value="1979">
						            1979</option>
						
						        <option label="1978" value="1978">
						            1978</option>
						
						        <option label="1977" value="1977">
						            1977</option>
						
						        <option label="1976" value="1976">
						            1976</option>
						
						        <option label="1975" value="1975">
						            1975</option>
						
						        <option label="1974" value="1974">
						            1974</option>
						
						        <option label="1973" value="1973">
						            1973</option>
						
						        <option label="1972" value="1972">
						            1972</option>
						
						        <option label="1971" value="1971">
						            1971</option>
						
						        <option label="1970" value="1970">
						            1970</option>
						
						        <option label="1969" value="1969">
						            1969</option>
						
						        <option label="1968" value="1968">
						            1968</option>
						
						        <option label="1967" value="1967">
						            1967</option>
						
						        <option label="1966" value="1966">
						            1966</option>
						
						        <option label="1965" value="1965">
						            1965</option>
						
						        <option label="1964" value="1964">
						            1964</option>
						
						        <option label="1963" value="1963">
						            1963</option>
						
						        <option label="1962" value="1962">
						            1962</option>
						
						        <option label="1961" value="1961">
						            1961</option>
						
						        <option label="1960" value="1960">
						            1960</option>
						
						        <option label="1959" value="1959">
						            1959</option>
						
						        <option label="1958" value="1958">
						            1958</option>
						
						        <option label="1957" value="1957">
						            1957</option>
						
						        <option label="1956" value="1956">
						            1956</option>
						
						        <option label="1955" value="1955">
						            1955</option>
						
						        <option label="1954" value="1954">
						            1954</option>
						
						        <option label="1953" value="1953">
						            1953</option>
						
						        <option label="1952" value="1952">
						            1952</option>
						
						        <option label="1951" value="1951">
						            1951</option>
						
						        <option label="1950" value="1950">
						            1950</option>
						
						        <option label="1949" value="1949">
						            1949</option>
						
						        <option label="1948" value="1948">
						            1948</option>
						
						        <option label="1947" value="1947">
						            1947</option>
						
						        <option label="1946" value="1946">
						            1946</option>
						
						        <option label="1945" value="1945">
						            1945</option>
						
						        <option label="1944" value="1944">
						            1944</option>
						
						        <option label="1943" value="1943">
						            1943</option>
						
						        <option label="1942" value="1942">
						            1942</option>
						
						        <option label="1941" value="1941">
						            1941</option>
						
						        <option label="1940" value="1940">
						            1940</option>
						
						        <option label="1939" value="1939">
						            1939</option>
						
						        <option label="1938" value="1938">
						            1938</option>
						
						        <option label="1937" value="1937">
						            1937</option>
						
						        <option label="1936" value="1936">
						            1936</option>
						
						        <option label="1935" value="1935">
						            1935</option>
						
						        <option label="1934" value="1934">
						            1934</option>
						
						        <option label="1933" value="1933">
						            1933</option>
						
						        <option label="1932" value="1932">
						            1932</option>
						
						        <option label="1931" value="1931">
						            1931</option>
						
						        <option label="1930" value="1930">
						            1930</option>
						
						        <option label="1929" value="1929">
						            1929</option>
						
						        <option label="1928" value="1928">
						            1928</option>
						
						        <option label="1927" value="1927">
						            1927</option>
						    </select>
                        <i class="fa fa-check"></i>
                    </div>

                    <div class="fieldElement required toolTippers" id="my_ssn">
                        <label for="ssn1" class="grid-2 alpha">Social Security #:</label>
                        <input name="ssn1" id="ssn1" type="text" class="grid-2" value=""/>
                        <input name="ssn2" id="ssn2" type="text" class="grid-1" value=""/>
						<input name="ssn3" id="ssn3" type="text" class="grid-2" value=""/>
                        <i class="fa fa-check"></i>
                        <a href="#" class="whatsThis fa" title="safeWithUs"></a>
                        <div class="toolTip" id="safeWithUs"><i class="fa"></i>
                            <p><strong>Why do we require this?</strong><br>
                            Our lenders require your Social Security number in order to verify you are in fact the person requesting this loan<br>
                            <a href="javascript:{}" onclick="window.open('/why/', 'SSN', 'width=300,height=100,scrollbars=no,status=no,menubars=no'); return false" rel="nofollow"></a></p>
                        </div>
                    </div>

                    <div id="my_license" class="fieldElement">
                        <label for="license" class="grid-2 alpha">Driver's License/<br/>State ID #:</label>
                        <input type="text" id="license" name="license" value="" class="grid-5 omega">
                    </div>

                    <div class="fieldElement required" id="my_license_state">
                        <label for="license_state" class="grid-2 alpha">Issuing State:</label>
                        <select name="license_state" id="license_state" class="grid-5 omega">
                            <option value="">
                                --Select--
                            </option>

                            <option label="AK" value="AK">
                                AK
                            </option>

                            <option label="AL" value="AL">
                                AL
                            </option>

                            <option label="AR" value="AR">
                                AR
                            </option>

                            <option label="AZ" value="AZ">
                                AZ
                            </option>

                            <option label="CA" value="CA">
                                CA
                            </option>

                            <option label="CO" value="CO">
                                CO
                            </option>

                            <option label="CT" value="CT">
                                CT
                            </option>

                            <option label="DC" value="DC">
                                DC
                            </option>

                            <option label="DE" value="DE">
                                DE
                            </option>

                            <option label="FL" value="FL">
                                FL
                            </option>

                            <option label="GA" value="GA">
                                GA
                            </option>

                            <option label="HI" value="HI">
                                HI
                            </option>

                            <option label="IA" value="IA">
                                IA
                            </option>

                            <option label="ID" value="ID">
                                ID
                            </option>

                            <option label="IL" value="IL">
                                IL
                            </option>

                            <option label="IN" value="IN">
                                IN
                            </option>

                            <option label="KS" value="KS">
                                KS
                            </option>

                            <option label="KY" value="KY">
                                KY
                            </option>

                            <option label="LA" value="LA">
                                LA
                            </option>

                            <option label="MA" value="MA">
                                MA
                            </option>

                            <option label="MD" value="MD">
                                MD
                            </option>

                            <option label="ME" value="ME">
                                ME
                            </option>

                            <option label="MI" value="MI">
                                MI
                            </option>

                            <option label="MN" value="MN">
                                MN
                            </option>

                            <option label="MO" value="MO">
                                MO
                            </option>

                            <option label="MS" value="MS">
                                MS
                            </option>

                            <option label="MT" value="MT">
                                MT
                            </option>

                            <option label="NC" value="NC">
                                NC
                            </option>

                            <option label="ND" value="ND">
                                ND
                            </option>

                            <option label="NE" value="NE">
                                NE
                            </option>

                            <option label="NH" value="NH">
                                NH
                            </option>

                            <option label="NJ" value="NJ">
                                NJ
                            </option>

                            <option label="NM" value="NM">
                                NM
                            </option>

                            <option label="NV" value="NV">
                                NV
                            </option>

                            <option label="NY" value="NY" selected="selected">
                                NY
                            </option>

                            <option label="OH" value="OH">
                                OH
                            </option>

                            <option label="OK" value="OK">
                                OK
                            </option>

                            <option label="OR" value="OR">
                                OR
                            </option>

                            <option label="PA" value="PA">
                                PA
                            </option>

                            <option label="RI" value="RI">
                                RI
                            </option>

                            <option label="SC" value="SC">
                                SC
                            </option>

                            <option label="SD" value="SD">
                                SD
                            </option>

                            <option label="TN" value="TN">
                                TN
                            </option>

                            <option label="TX" value="TX">
                                TX
                            </option>

                            <option label="UT" value="UT">
                                UT
                            </option>

                            <option label="VA" value="VA">
                                VA
                            </option>

                            <option label="VT" value="VT">
                                VT
                            </option>

                            <option label="WA" value="WA">
                                WA
                            </option>

                            <option label="WI" value="WI">
                                WI
                            </option>

                            <option label="WV" value="WV">
                                WV
                            </option>

                            <option label="WY" value="WY">
                                WY
                            </option>
                        </select>
                        <i class="fa fa-check"></i>
                    </div>

                    <div id="my_rent_own" class="fieldElement required">
                        <label for="own_home" class="grid-2 alpha">Do you own or rent?</label>
                        <select id="own_home" name="own_home" class="grid-5 omega">
                            <option value="">
                                --Select--
                            </option>

                            <option label="rent" value="rent" selected="selected">
                                rent
                            </option>

                            <option label="own" value="own">
                                own
                            </option>
                        </select>
                        <i class="fa fa-check"></i>
                    </div>

                    <div class="fieldElement required" id="my_residence">
                        <label class="grid-2 alpha" for="home_lengthM">Time at Residence:</label>
                        <select name="home_lengthM" id="home_lengthM" class="grid-5 omega">
                            <option value="">
                                --
                            </option>

                            <option label="9+ Years" value="108">
                                9+ Years
                            </option>

                            <option label="8 Years" value="96">
                                8 Years
                            </option>

                            <option label="7 Years" value="84" selected="selected">
                                7 Years
                            </option>

                            <option label="6 Years" value="72">
                                6 Years
                            </option>

                            <option label="5 Years" value="60">
                                5 Years
                            </option>

                            <option label="4 Years" value="48">
                                4 Years
                            </option>

                            <option label="3 Years" value="36">
                                3 Years
                            </option>

                            <option label="2 Years" value="24">
                                2 Years
                            </option>

                            <option label="1 Year or less" value="12">
                                1 Year or less
                            </option>
                        </select>
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="clear-fix"></div>
                </section>

                <section id="employmentStep" class="fieldSection">
                    <header>
	                    <div>
                        	<h1>Step 2</h1>
							<h2>Tell us about your current employment</h2>
	                    </div>
                    </header>
                    <div class="fieldElement">
                        <label for="military" class="grid-2 alpha">Are you in the Military?</label>
                        <select id="military" name="military" class="grid-5">
                            <option value="">--Select--</option>
                            <option label="No" value="no">No</option>
                            <option label="Yes" value="yes">Yes</option>
                        </select>
                        <i class="fa fa-check"></i>
                    </div>
                    <div id="info_field" class="fieldElement required">
                        <label for="emp_status" class="grid-2 alpha">Primary source of income:</label>
                        <select id="emp_status" name="emp_status" class="grid-5">
                            <option value="">
                                --Select--
                            </option>

                            <option label="Unemployed" value="1">
                                Unemployed
                            </option>

                            <option label="Soc. Sec." value="2">
                                Soc. Sec.
                            </option>

                            <option label="Self Emp." value="16">
                                Self Emp.
                            </option>

                            <option label="Pension" value="8">
                                Pension
                            </option>

                            <option label="Employed" value="32">
                                Employed
                            </option>

                            <option label="Disability" value="4">
                                Disability
                            </option>
                        </select>
                        <i class="fa fa-check"></i>
                    </div>
					
                    <div id="company_name_field" class="fieldElement empField">
                        <label for="employer" class="grid-2 alpha">Company Name:</label>
                        <input type="text" id="employer" name="employer" size="25" value="" class="grid-5">
                        <i class="fa fa-check"></i>
                    </div>
                    
                    <div id="title_field" class="fieldElement empField">
                        <label for="title" class="grid-2 alpha">Position/Title:</label>
                        <input type="text" id="title" name="title" value="" class="grid-5">
                        <i class="fa fa-check"></i>
                    </div>
                    
                    <div id="emp_address_field" class="fieldElement empField">
                        <label for="emp_address1" class="grid-2 alpha">Work Address:</label>
                        <input type="text" id="emp_city" name="emp_city" size="25" value="" placeholder="City" class="grid-2"/>
                        <select id="emp_state" name="emp_state" class="grid-1">
                            <option value="">
                                State
                            </option>

                            <option label="AK" value="AK">
                                AK
                            </option>

                            <option label="AL" value="AL">
                                AL
                            </option>

                            <option label="AR" value="AR">
                                AR
                            </option>

                            <option label="AZ" value="AZ">
                                AZ
                            </option>

                            <option label="CA" value="CA">
                                CA
                            </option>

                            <option label="CO" value="CO">
                                CO
                            </option>

                            <option label="CT" value="CT">
                                CT
                            </option>

                            <option label="DC" value="DC">
                                DC
                            </option>

                            <option label="DE" value="DE">
                                DE
                            </option>

                            <option label="FL" value="FL">
                                FL
                            </option>

                            <option label="GA" value="GA">
                                GA
                            </option>

                            <option label="HI" value="HI">
                                HI
                            </option>

                            <option label="IA" value="IA">
                                IA
                            </option>

                            <option label="ID" value="ID">
                                ID
                            </option>

                            <option label="IL" value="IL">
                                IL
                            </option>

                            <option label="IN" value="IN">
                                IN
                            </option>

                            <option label="KS" value="KS">
                                KS
                            </option>

                            <option label="KY" value="KY">
                                KY
                            </option>

                            <option label="LA" value="LA">
                                LA
                            </option>

                            <option label="MA" value="MA">
                                MA
                            </option>

                            <option label="MD" value="MD">
                                MD
                            </option>

                            <option label="ME" value="ME">
                                ME
                            </option>

                            <option label="MI" value="MI">
                                MI
                            </option>

                            <option label="MN" value="MN">
                                MN
                            </option>

                            <option label="MO" value="MO">
                                MO
                            </option>

                            <option label="MS" value="MS">
                                MS
                            </option>

                            <option label="MT" value="MT">
                                MT
                            </option>

                            <option label="NC" value="NC">
                                NC
                            </option>

                            <option label="ND" value="ND">
                                ND
                            </option>

                            <option label="NE" value="NE">
                                NE
                            </option>

                            <option label="NH" value="NH">
                                NH
                            </option>

                            <option label="NJ" value="NJ">
                                NJ
                            </option>

                            <option label="NM" value="NM">
                                NM
                            </option>

                            <option label="NV" value="NV">
                                NV
                            </option>

                            <option label="NY" value="NY">
                                NY
                            </option>

                            <option label="OH" value="OH">
                                OH
                            </option>

                            <option label="OK" value="OK">
                                OK
                            </option>

                            <option label="OR" value="OR">
                                OR
                            </option>

                            <option label="PA" value="PA">
                                PA
                            </option>

                            <option label="RI" value="RI">
                                RI
                            </option>

                            <option label="SC" value="SC">
                                SC
                            </option>

                            <option label="SD" value="SD">
                                SD
                            </option>

                            <option label="TN" value="TN">
                                TN
                            </option>

                            <option label="TX" value="TX">
                                TX
                            </option>

                            <option label="UT" value="UT">
                                UT
                            </option>

                            <option label="VA" value="VA">
                                VA
                            </option>

                            <option label="VT" value="VT">
                                VT
                            </option>

                            <option label="WA" value="WA">
                                WA
                            </option>

                            <option label="WI" value="WI">
                                WI
                            </option>

                            <option label="WV" value="WV">
                                WV
                            </option>

                            <option label="WY" value="WY">
                                WY
                            </option>
                        </select>
                        <input type="text" id="emp_zip" name="emp_zip" size="25" value="" placeholder="Zip" class="grid-2 omega"/>
                        <i class="fa fa-check"></i>
                    </div>

                    <div id="my_work" class="fieldElement empField">
                        <label for="empph1" class="grid-2 alpha">Work Phone #:</label>
                        <input type="text" id="empph1" name="empph1" value="" class="grid-2">
                        <input type="text" id="empph2" name="empph2" value="" class="grid-1">
                        <input type="text" id="empph3" name="empph3" value="" class="grid-2 omega">
                        <i class="fa fa-check"></i>
                    </div>
                    
                    <div id="employment_time" class="fieldElement empField">
                        <label class="grid-2 alpha" for="emp_lengthM">Time at job:</label>
                        <select name="emp_lengthM" id="emp_lengthM" class="grid-5">
                            <option value="">
                                --
                            </option>

                            <option label="9+ Years" value="108">
                                9+ Years
                            </option>

                            <option label="8 Years" value="96">
                                8 Years
                            </option>

                            <option label="7 Years" value="84" selected="selected">
                                7 Years
                            </option>

                            <option label="6 Years" value="72">
                                6 Years
                            </option>

                            <option label="5 Years" value="60">
                                5 Years
                            </option>

                            <option label="4 Years" value="48">
                                4 Years
                            </option>

                            <option label="3 Years" value="36">
                                3 Years
                            </option>

                            <option label="2 Years" value="24">
                                2 Years
                            </option>

                            <option label="1 Year or less" value="12">
                                1 Year or less
                            </option>
                        </select>
                        <i class="fa fa-check"></i>
                    </div>

                    <div id="mIncome_field" class="fieldElement required">
                        <label for="income" class="grid-2 alpha">Total Monthly Income:</label>
                        <select id="income" name="income" class="grid-5">
                            <option value="">
                                --
                            </option>

                            <option label="$500 - $1,000" value="1000">
                                $500 - $1,000
                            </option>

                            <option label="$1,001 - $1,500" value="1500">
                                $1,001 - $1,500
                            </option>

                            <option label="$1,501 - $2,000" value="2000" selected="selected">
                                $1,501 - $2,000
                            </option>

                            <option label="$2,001 - $2,500" value="2500">
                                $2,001 - $2,500
                            </option>

                            <option label="$2,501 - $3,000" value="3000">
                                $2,501 - $3,000
                            </option>

                            <option label="$3,001 - $3,500" value="3500">
                                $3,001 - $3,500
                            </option>

                            <option label="$3,501 - $4,000" value="4000">
                                $3,501 - $4,000
                            </option>

                            <option label="$4,001 - $4,500" value="4500">
                                $4,001 - $4,500
                            </option>

                            <option label="$4,501 - $5,000" value="5000">
                                $4,501 - $5,000
                            </option>

                            <option label="Over $5,000" value="5500">
                                Over $5,000
                            </option>
                        </select>
                        <i class="fa fa-check"></i>
                    </div>

                    <div id="employment_how_often" class="fieldElement required">
                        <label for="pay_period" class="grid-2 alpha">How often are you paid?</label>
                        <select name="pay_period" id="pay_period" class="grid-5">
                            <option value="">
                                --
                            </option>

                            <option label="Weekly" value="2">
                                Weekly
                            </option>

                            <option label="Every Other Week" value="4">
                                Every Other Week
                            </option>

                            <option label="Monthly" value="8">
                                Monthly
                            </option>

                            <option label="Twice-Monthly" value="16">
                                Twice-Monthly
                            </option>
                        </select>
                        <i class="fa fa-check"></i>
                    </div>

                    <div id="pd_field" class="fieldElement required">
                        <label for="next_pay" class="grid-2 alpha">Date of 1st Payday:</label>
                        <select id="next_pay" name="next_pay" class="grid-5">
                        	<option value="">--Select--</option>
                        </select>
                        <i class="fa fa-check"></i>
                    </div>

                    <div id="pd_field2" class="fieldElement required">
                        <label for="next_pay2" class="grid-2 alpha">Date of 2nd Payday:</label>
                        <select id="next_pay2" name="next_pay2" class="grid-5">
                        	<option value="">--Select--</option>
                        </select>
                    	<i class="fa fa-check"></i>
                    </div>

                    <div id="DirectDeposit_field" class="fieldElement">
                        <label for="dir_dep" class="grid-2 alpha">Direct Deposit?</label>
                         <select id="dir_dep" name="dir_dep" class="grid-5">
                        	<option value="">--Select--</option>
                        	<option value="yes">Yes</option>
                        	<option value="no">No</option>
                        </select>
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="clear-fix"></div>
                </section>

                <section id="bankStep" class="fieldSection">
					<header>
                        <div>
	                        <h1>Step 3</h1>
							<h2>Where do you want us to deposit your cash!</h2>
                        </div>
                    </header>
                    
                    
                    <a href="javascript:{}" onclick="loadPop('http://www.paydayloanreliable.com', 'win1', 'UP');return false;" class="noBankAccount">No Bank Account?<br>
                    Click Here</a>
                    
					
                    <div id="checkingacct_field" class="fieldElement required">
                        <label for="routing" class="grid-2 alpha">ABA/Routing #:</label>
                        <input type="text" id="routing" name="routing" size="25" value="" class="grid-5"> 
                        <a  target="_blank"  href="<?php if(!$ismobile){ echo 'javascript:{}';} else { echo 'images/check.png';}?>" class="checkingBtn" onclick="popup('images/check.png');">?</a>
                        <i class="fa fa-check"></i>
                        <ahref="javascript:{}" onclick="window.open('/check/','', 'height=560, width=600'); return false;" class="whatsThis fa" title="whyABA"></a>

                        <div class="toolTip" id="whyABA"><i class="fa"></i>
                            <p><strong>Why do we require this?</strong><br>
                            Our lenders need to know your ABA Number so they know where to send your loan. You can easily find these numbers by referring to the numbers across the bottom of one of your checks.<br>
                            <a href="javascript:{}" onclick="window.open('/check/','', 'height=560, width=600'); return false;">More Info.</a></p>
                        </div>
                    </div>
                    
                     <div id="bank_name_field" class="fieldElement">
                        <label for="bank_name" class="grid-2 alpha">Bank Name:</label>
                        <input type="text" id="bank_name" name="bank_name" size="25" value="" class="grid-5">
                        <i class="fa fa-check"></i>
                    </div>
                    
                    <div id="income_type_field" class="fieldElement required">
                        <label for="bank_lengthM" class="grid-2 alpha">Time at Bank:</label>
                        <select name="bank_lengthM" id="bank_lengthM" class="grid-5">
                            <option value="">
                                --
                            </option>

                            <option label="9+ Years" value="108">
                                9+ Years
                            </option>

                            <option label="8 Years" value="96">
                                8 Years
                            </option>

                            <option label="7 Years" value="84" selected="selected">
                                7 Years
                            </option>

                            <option label="6 Years" value="72">
                                6 Years
                            </option>

                            <option label="5 Years" value="60">
                                5 Years
                            </option>

                            <option label="4 Years" value="48">
                                4 Years
                            </option>

                            <option label="3 Years" value="36">
                                3 Years
                            </option>

                            <option label="2 Years" value="24">
                                2 Years
                            </option>

                            <option label="1 Year or less" value="12">
                                1 Year or less
                            </option>
                        </select>
                        <i class="fa fa-check"></i>
                    </div>
					
					<div id="account_type_field" class="fieldElement">
                        <label for="account_type" class="grid-2 alpha">Account Type:</label>
                        	<select name="account_type" id="account_type" class="grid-5">
                        		<option value="">--</option>
                        		<option value="checking">Checking</option>
                        		<option value="savings">Savings</option>
                        		<option value="both">Both</option>
                        	</select>
                        <i class="fa fa-check"></i>
                    </div>

                    <div id="checkingacct2_field" class="fieldElement required">
                        <label for="acct" class="grid-2 alpha">Checking Account #:</label>
                        <input type="text" id="acct" name="acct"  value="" class="grid-5">
                        <a  target="_blank"  href="<?php if(!$ismobile){ echo 'javascript:{}';} else { echo 'images/check.png';}?>" class="checkingBtn" onclick="popup('images/check.png');">?</a>
                        <i class="fa fa-check"></i>
                        <a href="avascript:{}" onclick="window.open('/check/','', 'height=560, width=600'); return false;" class="whatsThis fa" title="whyAcct">&nbsp;</a>

                        <div class="toolTip" id="whyAcct"><i class="fa"></i>
                            <p><strong>Why do we require this?</strong><br>
                            Our lenders need to know your bank account Number so they know where to send your loan. You can easily find these numbers by referring to the numbers across the bottom of one of your checks.<br>
                            <a href="javascript:{}" onclick="window.open('/check/','', 'height=560, width=600'); return false;">More Info.</a></p>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                </section>

                <div class="privacy">
                    <p>By clicking the button below and submitting your form, you certify that you are at least 18 years old and agree to the terms of our Privacy Policy and the Terms and Conditions that govern this web site and the service.</p>
                </div><input type="submit" name="submit" class="submitBtn" value="Request Cash Now"> <input type="hidden" name="siteID" value="7482"> <input type="hidden" name="uID" value="0"> <input type="hidden" name="emID" value="166560478"> <input type="hidden" name="affID" value=""> <input type="hidden" name="opt" value=""> <input type="hidden" name="subc1" value=""> <input type="hidden" name="subc2" value=""> <input type="hidden" name="subc3" value=""> <input type="hidden" name="rep" value="0">
            </form>
        </div>
    </div>
    <script src="js/page2.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjRCRlyywTIuaiIokB6h26mT0VcUz6hds&libraries=places&callback=initAutocomplete"
        async defer></script>
    

<?php
		
    include("footer.php"); ?>
