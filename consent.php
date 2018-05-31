<?php 
session_start();
$_SESSION['totalCost'] = htmlspecialchars($_POST['totalCost']);
$_SESSION['nameChildOneFirst'] = htmlspecialchars($_POST['nameChildOneFirst']);
$_SESSION['nameChildOneLast'] = htmlspecialchars($_POST['nameChildOneLast']);
$_SESSION['yearOne'] = htmlspecialchars($_POST['yearOne']);
$_SESSION['monthOne'] = htmlspecialchars($_POST['monthOne']);
$_SESSION['dayOne'] = htmlspecialchars($_POST['dayOne']);
$_SESSION['allergiesOne'] = htmlspecialchars($_POST['allergiesOne']);
$_SESSION['allergyTextOne'] = htmlspecialchars($_POST['allergyTextOne']);
$_SESSION['assistantOne'] = htmlspecialchars($_POST['assistantOne']);
$_SESSION['genderOne'] = htmlspecialchars($_POST['genderOne']);
$_SESSION['gradeOne'] = htmlspecialchars($_POST['gradeOne']);

if (isset($_POST["nameChildTwoFirst"]) && !empty($_POST["nameChildTwoFirst"])) {
$_SESSION['nameChildTwoFirst'] = htmlspecialchars($_POST['nameChildTwoFirst']);
$_SESSION['nameChildTwoLast'] = htmlspecialchars($_POST['nameChildTwoLast']);
$_SESSION['yearTwo'] = htmlspecialchars($_POST['yearTwo']);
$_SESSION['monthTwo'] = htmlspecialchars($_POST['monthTwo']);
$_SESSION['dayTwo'] = htmlspecialchars($_POST['dayTwo']);
$_SESSION['allergiesTwo'] = htmlspecialchars($_POST['allergiesTwo']);
$_SESSION['allergyTextTwo'] = htmlspecialchars($_POST['allergyTextTwo']);
$_SESSION['assistantTwo'] = htmlspecialchars($_POST['assistantTwo']);
$_SESSION['genderTwo'] = htmlspecialchars($_POST['genderTwo']);
$_SESSION['gradeTwo'] = htmlspecialchars($_POST['gradeTwo']);
}

if (isset($_POST["nameChildThreeFirst"]) && !empty($_POST["nameChildThreeFirst"])) {
$_SESSION['nameChildThreeFirst'] = htmlspecialchars($_POST['nameChildThreeFirst']);
$_SESSION['nameChildThreeLast'] = htmlspecialchars($_POST['nameChildThreeLast']);
$_SESSION['yearThree'] = htmlspecialchars($_POST['yearThree']);
$_SESSION['monthThree'] = htmlspecialchars($_POST['monthThree']);
$_SESSION['dayThree'] = htmlspecialchars($_POST['dayThree']);
$_SESSION['allergiesThree'] = htmlspecialchars($_POST['allergiesThree']);
$_SESSION['allergyTextThree'] = htmlspecialchars($_POST['allergyTextThree']);
$_SESSION['assistantThree'] = htmlspecialchars($_POST['assistantThree']);
$_SESSION['genderThree'] = htmlspecialchars($_POST['genderThree']);
$_SESSION['gradeThree'] = htmlspecialchars($_POST['gradeThree']);
}

if (isset($_POST["nameChildFourFirst"]) && !empty($_POST["nameChildFourFirst"])) {
$_SESSION['nameChildFourFirst'] = htmlspecialchars($_POST['nameChildFourFirst']);
$_SESSION['nameChildFourLast'] = htmlspecialchars($_POST['nameChildFourLast']);
$_SESSION['yearFour'] = htmlspecialchars($_POST['yearFour']);
$_SESSION['monthFour'] = htmlspecialchars($_POST['monthFour']);
$_SESSION['dayFour'] = htmlspecialchars($_POST['dayFour']);
$_SESSION['allergiesFour'] = htmlspecialchars($_POST['allergiesFour']);
$_SESSION['allergyTextFour'] = htmlspecialchars($_POST['allergyTextFour']);
$_SESSION['assistantFour'] = htmlspecialchars($_POST['assistantFour']);
$_SESSION['genderFour'] = htmlspecialchars($_POST['genderFour']);
$_SESSION['gradeFour'] = htmlspecialchars($_POST['gradeFour']);
}

if (isset($_POST["nameChildFiveFirst"]) && !empty($_POST["nameChildFiveFirst"])) {
$_SESSION['nameChildFiveFirst'] = htmlspecialchars($_POST['nameChildFiveFirst']);
$_SESSION['nameChildFiveLast'] = htmlspecialchars($_POST['nameChildFiveLast']);
$_SESSION['yearFive'] = htmlspecialchars($_POST['yearFive']);
$_SESSION['monthFive'] = htmlspecialchars($_POST['monthFive']);
$_SESSION['dayFive'] = htmlspecialchars($_POST['dayFive']);
$_SESSION['allergiesFive'] = htmlspecialchars($_POST['allergiesFive']);
$_SESSION['allergyTextFive'] = htmlspecialchars($_POST['allergyTextFive']);
$_SESSION['assistantFive'] = htmlspecialchars($_POST['assistantFive']);
$_SESSION['genderFive'] = htmlspecialchars($_POST['genderFive']);
$_SESSION['gradeFive'] = htmlspecialchars($_POST['gradeFive']);
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consent</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Consent and Payment</h1>
	<fieldset id="agreement">

		<h2 class="consent">Informed Consent and Acknowledgement</h2>
		<p>I hereby give my approval for my child(ren)’s participation in any and all activities prepared by HSA-UWC during the selected camp. In exchange for the acceptance of said child(ren)’s candidacy by HSA-UWC, I assume all risk and hazards incidental to the conduct of the activities, and release, absolve and hold harmless HSA-UWC and all its respective directors, staff and representatives from any and all liability for injuries to said child(ren) arising out of traveling to, participating in, or returning from selected camp sessions. In case of injury to said child(ren), I hereby waive all claims against HSA-UWC including all staff and affiliates, all participants, Parents and, if applicable, owners and lessors of premises used to conduct the event. There is a risk of being injured that is inherent in all activities. Some of these injuries include, but are not limited to, the risk of fractures, paralysis, or death.</p>

		<h2 class="medical">Medical Release and Authorization</h2>
		<p>As Parent and/or Guardian of the named camper(s), I hereby authorize the diagnosis and treatment by onsite staff, of the minor child(ren), in the event of a medical emergency, which in the opinion of the attending staff, requires immediate attention to prevent further endangerment of the minor’s life, physical disfigurement, physical impairment, or other undue pain, suffering or discomfort, if delayed. Permission is hereby granted to the attending staff of HSA-UWC and its affiliates including Directors, Team Leaders, and Parents to provide the needed emergency treatment prior to the child(ren)’s admission to the medical facility. Release authorized on the dates and/or duration of the registered dates. This release is authorized and executed of my own free will, with the sole purpose of authorizing medical treatment under emergency circumstances, for the protection of life and limb of the named minor child(ren), in my absence.</p>

		<h2 class="confirmation">Confirmation</h2>

		<p>BY AGREEING AND SUBMITTING THIS ONLINE FORM, I AM DELIVERING AN ELECTRONIC AGREEMENT THAT WILL HAVE THE SAME EFFECT AS AN ORIGINAL MANUAL PAPER AGREEMENT. THE ELECTRONIC AGREEMENT WILL BE EQUALLY AS BINDING AS AN ORIGINAL MANUAL PAPER AGREEMENT.</p>

		<h2 class="payment">Payment</h2>
		<p>I understand that I am responsible for the amount due listed below in Canadian (CAD) Dollars ($). This amount can be payed in cash or check, payable to HSA-UWC on or before July 22, 2018</p>

		<p><strong>Amount Due: $<?php echo htmlspecialchars($_SESSION['totalCost']); ?></strong></p>

	</fieldset>
	
	<form action="submit.php" method="POST">
		<div>
			<label><input type="checkbox" id="agree">Agree</label>
		</div>
			<input type="submit" class="submit" id="submitButton" name="submit" value="Submit" disabled>
		
	</form>
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/jscript.js"></script>
</body>
</html>

 