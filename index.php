<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Boreal Summer Camp Registration</h1>
	<form action="registration.php" id="myform" method="Post">

		<fieldset>
			<legend>Parent/Guardian Information</legend>
				<table>
					<colgroup>
				        <col width="5%"><col width="5%">
				        <col width="5%"><col width="5%">
				        <col width="5%"><col width="5%">
				        <col width="5%"><col width="5%">
				        <col width="5%"><col width="5%">
				        <col width="5%"><col width="5%">
				        <col width="5%"><col width="5%">
				        <col width="5%"><col width="5%">
				        <col width="5%"><col width="5%">
				        <col width="5%"><col width="5%">
				    </colgroup>
					<tr>
						<td colspan="4" class="nowrap"><label for="nameParent">Name:</label></td>
						<td colspan="5"><input type="text" id="nameParentFirst" maxlength="30" name="nameParentFirst" placeholder="First" autocomplete="off" data-error="#errNm1" autofocus></td>
						<td colspan="1"></td>
						<td colspan="5"><input type="text" maxlength="30" name="nameParentLast" placeholder="Last" autocomplete="off" data-error="#errNm2"></td>	
						<td colspan="5"></td>			
					</tr>
					<tr class="errorMsg">
						<td colspan="4"></td>
						<td colspan="5"><div><span class="errorMsg" id="errNm1"></span></div></td>
						<td colspan="1"></td>
						<td colspan="10"><div><span class="errorMsg" id="errNm2"></span></div></td>
					</tr>



					<tr>
						<td colspan="4" class="nowrap">Phone Number:</td>
						<td colspan="5"><input type="tel" id="numPhone" maxlength="14" name="numPhone" placeholder="(123)-456-7890" autocomplete="off" data-error="#errNm3"></td>
						<td colspan="11"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="5"><div class="errorTxt"><span id="errNm3"></span></div></td>
						<td colspan="11"></td>
					</tr>



					<tr>
						<td colspan="4">Address:</td>
						<td colspan="11"><input type="text" id="street" maxlength="100" name="street" placeholder="Street and number" autocomplete="off" data-error="#errNm4"></td>
						<td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="6"><div class="errorTxt"><span id="errNm4"></span></div></td>
						<td colspan="11"></td>
					</tr>



					<tr>
						<td colspan="4"></td>
						<td colspan="5"><input type="text" maxlength="7" name="postal" placeholder="Postal Code" autocomplete="off" data-error="#errNm5"></td>
						<td colspan="1"></td>
						<td colspan="5"><input type="text" maxlength="30" name="city" placeholder="City" autocomplete="off" data-error="#errNm6"></td>
						<td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="5"><div class="errorTxt"><span id="errNm5"></span></div></td>
						<td colspan="1"></td>
						<td colspan="10"><div class="errorTxt"><span id="errNm6"></span></div></td>
					</tr>




					<tr>
						<td colspan="4"></td>
						<td colspan="5"><input type="text" maxlength="30" name="province" placeholder="Province" autocomplete="off" data-error="#errNm7"></td>
						<td colspan="1"></td>
						<td colspan="5"><input type="text" maxlength="30" id="address" name="country" placeholder="Country" autocomplete="off" data-error="#errNm8"></td>
						<td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="5"><div><span class="errorMsg" id="errNm7"></span></div></td>
						<td colspan="1"></td>
						<td colspan="10"><div><span class="errorMsg" id="errNm8"></span></div></td>
					</tr>

					<tr>
						<td colspan="4">Email:</td>
						<td colspan="5"><input type="email" id="email" maxlength="100" name="email" placeholder="abc@example.com" autocomplete="off" data-error="#errNm9"></td>
						<td colspan="11"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="5"><div><span class="errorMsg" id="errNm9"></span></div></td>
						<td colspan="11"></td>
					</tr>

					
				</table>

				<table>
					<tr>
						<td colspan="6">Number of Children Attending:</td>
						<td colspan="14"><input type="radio" name="numAttend" value="one" id="one" autocomplete="off"><label for="one" class="selection">One</label>
						<input type="radio" name="numAttend" value="two" id="two" autocomplete="off"><label for="two" class="selection">Two</label>
						<input type="radio" name="numAttend" value="three" id="three" autocomplete="off"><label for="three" class="selection">Three</label>
						<input type="radio" name="numAttend" value="four" id="four" autocomplete="off"><label for="four" class="selection">Four</label>
						<input type="radio" name="numAttend" value="five" id="five" autocomplete="off"><label for="five" class="selection" data-error="#errNm10">Five</label></td>
					</tr>

					<tr>
						<td colspan="6"></td>
						<td colspan="14"><div><span class="errorMsg" id="errNm10"></span></div></td>
					</tr>
				</table>
		</fieldset>

		<div class="nextButton">
			<input type="submit" class="submit" id="next" value="Next" name="Submit">
		</div>
		
		<input type="text" id="totalCost" name="totalCost" value="">
		
	</form>
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jscript.js"></script>

</body>
</html>