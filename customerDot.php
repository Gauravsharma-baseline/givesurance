<html>
<head>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="style2.css" rel="stylesheet" type="text/css">

<title>Customer with DOt</title>
</head>
<body>

<h1 style="margin-top:20px" align="center">Customer with DOT</h1>
<!-- multistep form -->
<form id="msform">
<!-- progressbar -->
<ul id="progressbar">
<li class="phoneli active">Phone Number </li>
<li class='dot'>DOT & MC</li>
<li>Verify Phyical Address</li>
<li>Verify Mailing Address</li>
</ul>
<!-- fieldsets -->
<fieldset class='first'>
<h2 class="fs-title">Enter Phone Number</h2>
<h3 class="fs-subtitle"></h3>
<input type="text" name="phone" placeholder="Phone Number" required class='phoneNumber' />
<input type="hidden" name="contactId" placeholder="Phone Number" required class='contactId' />
<input type="button" name="next" class="action-button phone_number_next"" value="Next" />
</fieldset>
<fieldset class='second'>
<h2 class="fs-title">Enter DOT & MC</h2>
<h3 class="fs-subtitle"></h3>
<div class='header_search'>
<input type="radio" name="selectType" placeholder="DOT" value='1'/>DOT
<input type="radio" name="selectType" placeholder="MC" value='2'/>MC
</div>
<input type="text" name="searchedNumber" placeholder="Enter number" />
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next action-button phone_number_next" value="Next" />
</fieldset>
<fieldset>
<h2 class="fs-title">Is this your Physcial Address</h2>
<h3 class="fs-subtitle"></h3>
<input type="text" name="addresss" placeholder="addresss" />
<input type="text" name="lname" placeholder="Street Address" />
<input type="text" name="phone" placeholder="Address Line 2" />
<input type="text" name="phone" placeholder="City" />
<input type="text" name="phone" placeholder="State/Region/Province" />
<input type="text" name="phone" placeholder="Postal / Zip Code" />

<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next action-button phone_number_next" value="Next" />

</fieldset>
<fieldset>
<h2 class="fs-title">Is this your Mailing Address</h2>
<h3 class="fs-subtitle"></h3>
<input type="text" name="addresss" placeholder="addresss" />
<input type="text" name="lname" placeholder="Street Address" />
<input type="text" name="phone" placeholder="Address Line 2" />
<input type="text" name="phone" placeholder="City" />
<input type="text" name="phone" placeholder="State/Region/Province" />
<input type="text" name="phone" placeholder="Postal / Zip Code" />

<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="submit" name="submit" class="submit action-button" value="Submit" />
</fieldset>
</form>

<!-- jQuery --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- jQuery easing plugin --> 
<script src="js/jquery.easing.min.js" type="text/javascript"></script> 
<script src="script.js" type="text/javascript"></script> 


</body>
</html>