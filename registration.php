<?php 
session_start();

$_SESSION['numAttend'] = htmlspecialchars($_POST['numAttend']);
$_SESSION['nameParentFirst'] = htmlspecialchars($_POST['nameParentFirst']);
$_SESSION['nameParentLast'] = htmlspecialchars($_POST['nameParentLast']);
$_SESSION['numPhone'] = htmlspecialchars($_POST['numPhone']);
$_SESSION['province'] = htmlspecialchars($_POST['province']);
$_SESSION['country'] = htmlspecialchars($_POST['country']);
$_SESSION['city'] = htmlspecialchars($_POST['city']);
$_SESSION['postal'] = htmlspecialchars($_POST['postal']);
$_SESSION['street'] = htmlspecialchars($_POST['street']);
$_SESSION['email'] = htmlspecialchars($_POST['email']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<input type="text" id="numOfChildren" name="numAttend" value="<?php echo htmlspecialchars($_SESSION['numAttend']); ?>">
	<h1>Boreal Summer Camp Registration</h1>
	<form action="consent.php" id="myform" method="Post">

	<!-- CHILD 1 -->
		<fieldset id="childOne" class="childInfo">
			<legend>Child Information</legend>
	
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
						<td colspan="4">Name:</td>
						<td colspan="5"><input type="text" id="nameChildOneFirst" maxlength="100" name="nameChildOneFirst" placeholder="First" autocomplete="off" data-error="#errNm1" autofocus></td>
						<td colspan="1"></td>
						<td colspan="5"><input type="text" id="nameChildOneLast" maxlength="100" name="nameChildOneLast" placeholder="Last" autocomplete="off" data-error="#errNm2"></td>
						<td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="5"><span id="errNm1"></span></td>
						<td colspan="1"></td>
						<td colspan="5"><span id="errNm2"></span></td>
						<td colspan="5"></td>
					</tr>



					<tr>
						<td colspan="4">Date of Birth:</td>
						<td class="dob" colspan="2"><input type="text" class="dob" id="yearOne" maxlength="4" name="yearOne" placeholder="YYYY" autocomplete="off"></td>
						<td class="dob" colspan="2"><input type="text" class="dob" id="monthOne" maxlength="2" name="monthOne" placeholder="MM" autocomplete="off"></td>
						<td class="dob" colspan="2"><input type="text" class="dob" id="dayOne" maxlength="2" name="dayOne" placeholder="DD" autocomplete="off" data-error="#errNm3"></td>
						<td colspan="10"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm3"></span></div></td>
					</tr>


					<tr>
						<td colspan="4">Gender:</td>
						<td colspan="16"><input type="radio" name="genderOne" value="male" id="maleOne" autocomplete="off"><label for="maleOne" class="selection">Male</label>
						<input type="radio" name="genderOne" value="female" id="femaleOne" autocomplete="off" data-error="#errNm4"><label for="femaleOne" class="selection">Female</label></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm4"></span></div></td>
					</tr>


					<tr>
						<td colspan="4">Grade:</td>
						<td colspan="2"><input type="text" class="grade" id="gradeOne" maxlength="2" name="gradeOne" placeholder="" autocomplete="off" data-error="#errNm5"></span></td>
						<td colspan="14"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm5"></span></div></td>
					</tr>


					<tr>
						<td colspan="8">Wish to be an assistant team leader:</td>
						<td colspan="1"></td>
						<td colspan="11"><input type="radio" name="assistantOne" value="yes" id="yes-assistantOne" autocomplete="off"><label for="yes-assistantOne" class="selection">Yes</label><input type="radio" name="assistantOne" value="no" id="no-assistantOne" autocomplete="off"><label for="no-assistantOne" class="selection" data-error="#errNm6">No</label></td>
					</tr>
					<tr>
						<td colspan="9"></td>
						<td colspan="11"><div><span class="errorMsg" id="errNm6"></span></div></td>
					</tr>


					<tr>
						<td colspan="8" class="doesHave">Does this camper have any allergies, chronic illnesses or medical conditions? If yes, please describe:</td>
						<td colspan="1"></td>
						<td colspan="11"><input type="radio" class="allergy yes-allergy" id="yes-allergyOne" name="allergiesOne" value="yes" autocomplete="off"><label for="yes-allergyOne" class="selection">Yes</label><input type="radio" class="allergy" id="no-allergyOne" name="allergiesOne" value="no" autocomplete="off"><label for="no-allergyOne" class="selection" data-error="#errNm7">No</label></td>
					</tr>
					<tr>
						<td colspan="9"></td>
						<td colspan="11"><div><span class="errorMsg" id="errNm7"></span></div></td>
					</tr>

					<tr class="showAllergy hide">
						<td colspan="15"><textarea class="allergyText" id="allergyTextOne" maxlength="250" name="allergyTextOne" placeholder="" rows="4" autocomplete="off" data-error="#errNm8"></textarea></td>
						<td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="20"><div><span class="errorMsg" id="errNm8"></span></div></td>
					</tr>
				</table>
		</fieldset>

	<!-- CHILD 2 -->
		<fieldset class="hide childInfo" id="childTwo">
			<legend>Child #2 Information</legend>
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
						<td colspan="4">Name:</td>
						<td colspan="5"><input type="text" id="nameChildTwoFirst" maxlength="100" name="nameChildTwoFirst" placeholder="First" autocomplete="off" data-error="#errNm9"></td>
						<td colspan="1"></td>
						<td colspan="5"><input type="text" id="nameChildTwoLast" maxlength="100" name="nameChildTwoLast" placeholder="Last" autocomplete="off" data-error="#errNm10"></td>
						<td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="5"><span id="errNm9"></span></td>
						<td colspan="1"></td>
						<td colspan="5"><span id="errNm10"></span></td>
						<td colspan="5"></td>
					</tr>


					<tr>
						<td colspan="4">Date of Birth:</td>
						<td colspan="2"><input type="text" class="dobTwo" id="yearTwo" maxlength="4" name="yearTwo" placeholder="YYYY" autocomplete="off"></td>
						<td colspan="2"><input type="text" class="dobTwo" id="monthTwo" maxlength="2" name="monthTwo" placeholder="MM" autocomplete="off"></td>
						<td colspan="2"><input type="text" class="dobTwo" id="dayTwo" maxlength="2" name="dayTwo" placeholder="DD" autocomplete="off" data-error="#errNm11"></td>
						<td colspan="10"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm11"></span></div></td>
					</tr>


					<tr>
						<td colspan="4">Gender:</td>
						<td colspan="16"><input type="radio" name="genderTwo" value="male" id="maleTwo" autocomplete="off"><label for="maleTwo" class="selection">Male</label><input type="radio" name="genderTwo" value="female" id="femaleTwo" autocomplete="off" data-error="#errNm12"><label for="femaleTwo" class="selection">Female</label></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm12"></span></div></td>
					</tr>


					<tr>
						<td colspan="4">Grade:</td>
						<td colspan="2"><input type="text" class="grade" id="gradeTwo" maxlength="2" name="gradeTwo" placeholder="" autocomplete="off" data-error="#errNm13"></span></td>
						<td colspan="14"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm13"></span></div></td>
					</tr>


					<tr>
						<td colspan="8">Wish to be an assistant team leader:</td>
						<td colspan="1"></td>
						<td colspan="11"><input type="radio" name="assistantTwo" value="yes" id="yes-assistantTwo" autocomplete="off"><label for="yes-assistantTwo" class="selection">Yes</label><input type="radio" name="assistantTwo" value="no" id="no-assistantTwo" autocomplete="off"><label for="no-assistantTwo" class="selection" data-error="#errNm14">No</label></td>
					</tr>
					<tr>
						<td colspan="9"></td>
						<td colspan="11"><div><span class="errorMsg" id="errNm14"></span></div></td>
					</tr>


					<tr>
						<td colspan="8" class="doesHave">Does this camper have any allergies, chronic illnesses or medical conditions? If yes, please describe:</td>
						<td colspan="1"></td>
						<td colspan="11"><input type="radio" class="allergy yes-allergy" id="yes-allergyTwo" name="allergiesTwo" value="yes" autocomplete="off"><label for="yes-allergyTwo" class="selection">Yes</label><input type="radio" class="allergy" id="no-allergyTwo" name="allergiesTwo" value="no" autocomplete="off"><label for="no-allergyTwo" class="selection" data-error="#errNm15">No</label></td>
					</tr>
					<tr>
						<td colspan="9"></td>
						<td colspan="11"><div><span class="errorMsg" id="errNm15"></span></div></td>
					</tr>


					<tr class="showAllergy hide">
						<td colspan="15"><textarea class="allergyText" id="allergyTextTwo" maxlength="250" name="allergyTextTwo" placeholder="" rows="4" autocomplete="off" data-error="#errNm16"></textarea></td>
						<td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="20"><div><span class="errorMsg" id="errNm16"></span></div></td>
					</tr>
				</table>
		</fieldset>

	<!-- CHILD 3 -->
		<fieldset class="hide childInfo" id="childThree">
			<legend>Child #3 Information</legend>
				<table>
					<tr>
						<td colspan="4">Name:</td>
						<td colspan="5"><input type="text" id="nameChildThreeFirst" maxlength="100" name="nameChildThreeFirst" placeholder="First" autocomplete="off" data-error="#errNm17"></td>
						<td colspan="1"></td>
						<td colspan="5"><input type="text" id="nameChildThreeLast" maxlength="100" name="nameChildThreeLast" placeholder="Last" autocomplete="off" data-error="#errNm18"></td>
						<td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="5"><span id="errNm17"></span></td>
						<td colspan="1"></td>
						<td colspan="5"><span id="errNm18"></span></td>
						<td colspan="5"></td>
					</tr>


					<tr>
						<td colspan="4">Date of Birth:</td>
						<td colspan="2"><input type="text" class="dobThree" id="yearThree" maxlength="4" name="yearThree" placeholder="YYYY" autocomplete="off"></td>
						<td colspan="2"><input type="text" class="dobThree" id="monthThree" maxlength="2" name="monthThree" placeholder="MM" autocomplete="off"></td>
						<td colspan="2"><input type="text" class="dobThree" id="dayThree" maxlength="2" name="dayThree" placeholder="DD" autocomplete="off" data-error="#errNm19"></td>
						<td colspan="10"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm19"></span></div></td>
					</tr>


					<tr>
						<td colspan="4">Gender:</td>
						<td colspan="16"><input type="radio" name="genderThree" value="male" id="maleThree" autocomplete="off"><label for="maleThree" class="selection">Male</label><input type="radio" name="genderThree" value="female" id="femaleThree" autocomplete="off" data-error="#errNm20"><label for="femaleThree" class="selection">Female</label></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm20"></span></div></td>
					</tr>


					<tr>
						<td colspan="4">Grade:</td>
						<td colspan="2"><input type="text" class="grade" id="gradeThree" maxlength="2" name="gradeThree" placeholder="" autocomplete="off" data-error="#errNm21"></span></td>
						<td colspan="14"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm21"></span></div></td>
					</tr>


					<tr>
						<td colspan="8">Wish to be an assistant team leader:</td>
						<td colspan="1"></td>
						<td colspan="11"><input type="radio" name="assistantThree" value="yes" id="yes-assistantThree" autocomplete="off"><label for="yes-assistantThree" class="selection">Yes</label><input type="radio" name="assistantThree" value="no" id="no-assistantThree" autocomplete="off"><label for="no-assistantThree" class="selection" data-error="#errNm22">No</label></td>
					</tr>
					<tr>
						<td colspan="9"></td>
						<td colspan="11"><div><span class="errorMsg" id="errNm22"></span></div></td>
					</tr>


					<tr>
						<td colspan="8" class="doesHave">Does this camper have any allergies, chronic illnesses or medical conditions? If yes, please describe:</td>
						<td colspan="1"></td>
						<td colspan="11"><input type="radio" class="allergy yes-allergy" id="yes-allergyThree" name="allergiesThree" value="yes" autocomplete="off"><label for="yes-allergyThree" class="selection">Yes</label><input type="radio" class="allergy" id="no-allergyThree" name="allergiesThree" value="no" autocomplete="off"><label for="no-allergyThree" class="selection" data-error="#errNm23">No</label></td>
					</tr>
					<tr>
						<td colspan="9"></td>
						<td colspan="11"><div><span class="errorMsg" id="errNm23"></span></div></td>
					</tr>


					<tr class="showAllergy hide">
						<td colspan="15"><textarea class="allergyText" id="allergyTextThree" maxlength="250" name="allergyTextThree" placeholder="" rows="4" autocomplete="off" data-error="#errNm24"></textarea></td>
						<td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="20"><div><span class="errorMsg" id="errNm24"></span></div></td>
					</tr>
				</table>			
		</fieldset>

	<!-- CHILD 4 -->
		<fieldset class="hide childInfo" id="childFour">
			<legend>Child #4 Information</legend>
				<table>
					<tr>
						<td colspan="4">Name:</td>
						<td colspan="5"><input type="text" id="nameChildFourFirst" maxlength="100" name="nameChildFourFirst" placeholder="First" autocomplete="off" data-error="#errNm25"></td>
						<td colspan="1"></td>
						<td colspan="5"><input type="text" id="nameChildFourLast" maxlength="100" name="nameChildFourLast" placeholder="Last" autocomplete="off" data-error="#errNm26"></td>
						<td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="5"><span id="errNm25"></span></td>
						<td colspan="1"></td>
						<td colspan="5"><span id="errNm26"></span></td>
						<td colspan="5"></td>
					</tr>


					<tr>
						<td colspan="4">Date of Birth:</td>
						<td colspan="2"><input type="text" class="dobFour" id="yearFour" maxlength="4" name="yearFour" placeholder="YYYY" autocomplete="off"></td>
						<td colspan="2"><input type="text" class="dobFour" id="monthFour" maxlength="2" name="monthFour" placeholder="MM" autocomplete="off"></td>
						<td colspan="2"><input type="text" class="dobFour" id="dayFour" maxlength="2" name="dayFour" placeholder="DD" autocomplete="off" data-error="#errNm27"></td>
						<td colspan="10"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm27"></span></div></td>
					</tr>


					<tr>
						<td colspan="4">Gender:</td>
						<td colspan="16"><input type="radio" name="genderFour" value="male" id="maleFour" autocomplete="off"><label for="maleFour" class="selection">Male</label><input type="radio" name="genderFour" value="female" id="femaleFour" autocomplete="off" data-error="#errNm28"><label for="femaleFour" class="selection">Female</label></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm28"></span></div></td>
					</tr>


					<tr>
						<td colspan="4">Grade:</td>
						<td colspan="2"><input type="text" class="grade" id="gradeFour" maxlength="2" name="gradeFour" placeholder="" autocomplete="off" data-error="#errNm29"></span></td>
						<td colspan="14"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm29"></span></div></td>
					</tr>


					<tr>
						<td colspan="8">Wish to be an assistant team leader:</td>
						<td colspan="1"></td>
						<td colspan="11"><input type="radio" name="assistantFour" value="yes" id="yes-assistantFour" autocomplete="off"><label for="yes-assistantFour" class="selection">Yes</label><input type="radio" name="assistantFour" value="no" id="no-assistantFour" autocomplete="off"><label for="no-assistantFour" class="selection" data-error="#errNm30">No</label></td>
					</tr>
					<tr>
						<td colspan="9"></td>
						<td colspan="11"><div><span class="errorMsg" id="errNm30"></span></div></td>
					</tr>


					<tr>
						<td colspan="8" class="doesHave">Does this camper have any allergies, chronic illnesses or medical conditions? If yes, please describe:</td>
						<td colspan="1"></td>
						<td colspan="11"><input type="radio" class="allergy yes-allergy" id="yes-allergyFour" name="allergiesFour" value="yes" autocomplete="off"><label for="yes-allergyFour" class="selection">Yes</label><input type="radio" class="allergy" id="no-allergyFour" name="allergiesFour" value="no" autocomplete="off"><label for="no-allergyFour" class="selection" data-error="#errNm31">No</label></td>
					</tr>
					<tr>
						<td colspan="9"></td>
						<td colspan="11"><div><span class="errorMsg" id="errNm31"></span></div></td>
					</tr>


					<tr class="showAllergy hide">
						<td colspan="15"><textarea class="allergyText" id="allergyTextFour" maxlength="250" name="allergyTextFour" placeholder="" rows="4" autocomplete="off" data-error="#errNm32"></textarea></td>
						<td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="20"><div><span class="errorMsg" id="errNm32"></span></div></td>
					</tr>
				</table>
		</fieldset>

	<!-- CHILD 5 -->
		<fieldset class="hide childInfo" id="childFive">
			<legend>Child #5 Information</legend>
				<table>
					<tr>
						<td colspan="4">Name:</td>
						<td colspan="5"><input type="text" id="nameChildFiveFirst" maxlength="100" name="nameChildFiveFirst" placeholder="First" autocomplete="off" data-error="#errNm33"></td>
						<td colspan="1"></td>
						<td colspan="5"><input type="text" id="nameChildFiveLast" maxlength="100" name="nameChildFiveLast" placeholder="Last" autocomplete="off" data-error="#errNm34"></td>
						<td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="5"><span id="errNm33"></span></td>
						<td colspan="1"></td>
						<td colspan="5"><span id="errNm34"></span></td>
						<td colspan="5"></td>
					</tr>


					<tr>
						<td colspan="4">Date of Birth:</td>
						<td colspan="2"><input type="text" class="dobFive" id="yearFive" maxlength="4" name="yearFive" placeholder="YYYY" autocomplete="off"></td>
						<td colspan="2"><input type="text" class="dobFive" id="monthFive" maxlength="2" name="monthFive" placeholder="MM" autocomplete="off"></td>
						<td colspan="2"><input type="text" class="dobFive" id="dayFive" maxlength="2" name="dayFive" placeholder="DD" autocomplete="off" data-error="#errNm35"></td>
						<td colspan="10"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm35"></span></div></td>
					</tr>


					<tr>
						<td colspan="4">Gender:</td>
						<td colspan="16"><input type="radio" name="genderFive" value="male" id="maleFive" autocomplete="off"><label for="maleFive" class="selection">Male</label><input type="radio" name="genderFive" value="female" id="femaleFive" autocomplete="off" data-error="#errNm36"><label for="femaleFive" class="selection">Female</label></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm36"></span></div></td>
					</tr>


					<tr>
						<td colspan="4">Grade:</td>
						<td colspan="2"><input type="text" class="grade" id="gradeFive" maxlength="2" name="gradeFive" placeholder="" autocomplete="off" data-error="#errNm37"></span></td>
						<td colspan="14"></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td colspan="16"><div><span class="errorMsg" id="errNm37"></span></div></td>
					</tr>


					<tr>
						<td colspan="8">Wish to be an assistant team leader:</td>
						<td colspan="1"></td>
						<td colspan="11"><input type="radio" name="assistantFive" value="yes" id="yes-assistantFive" autocomplete="off"><label for="yes-assistantFive" class="selection">Yes</label><input type="radio" name="assistantFive" value="no" id="no-assistantFive" autocomplete="off"><label for="no-assistantFive" class="selection" data-error="#errNm38">No</label></td>
					</tr>
					<tr>
						<td colspan="9"></td>
						<td colspan="11"><div><span class="errorMsg" id="errNm38"></span></div></td>
					</tr>


					<tr>
						<td colspan="8" class="doesHave">Does this camper have any allergies, chronic illnesses or medical conditions? If yes, please describe:</td>
						<td colspan="1"></td>
						<td colspan="11"><input type="radio" class="allergy yes-allergy" id="yes-allergyFive" name="allergiesFive" value="yes" autocomplete="off"><label for="yes-allergyFive" class="selection">Yes</label><input type="radio" class="allergy" id="no-allergyFive" name="allergiesFive" value="no" autocomplete="off"><label for="no-allergyFive" class="selection" data-error="#errNm39">No</label></td>
					</tr>
					<tr>
						<td colspan="9"></td>
						<td colspan="11"><div><span class="errorMsg" id="errNm39"></span></div></td>
					</tr>


					<tr class="showAllergy hide">
						<td colspan="15"><textarea class="allergyText" id="allergyTextFive" maxlength="250" name="allergyTextFive" placeholder="" rows="4" autocomplete="off" data-error="#errNm40"></textarea></td>
						<td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="20"><div><span class="errorMsg" id="errNm40"></span></div></td>
					</tr>
				</table>
		</fieldset>

		<input type="text" id="totalCost" name="totalCost" value="">
		<div class="nextButton">
			<input type="submit" class="submit" id="next" name="submit" value="Next">
		</div>	
	</form>
	
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/formvalidate2.js"></script>
	<script src="js/jscript.js"></script>
	</body>
</html>


