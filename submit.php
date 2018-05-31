<?php 
session_start();


// ----------------LOCALHOST------------------
define('DB_HOST', 'localhost');
define('DB_DATABASE', 'publications');
define('DB_USER', 'kcy');
define('DB_PASS', 'pass123');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
if($conn->connect_error) die($conn->connect_error);


$parentFirst = $_SESSION['nameParentFirst'];
$parentLast = $_SESSION['nameParentLast'];
$phone = $_SESSION['numPhone'];
$province = $_SESSION['province'];
$country = $_SESSION['country'];
$city = $_SESSION['city'];
$postal = $_SESSION['postal'];
$street = $_SESSION['street'];
$email = $_SESSION['email'];


$totalCost = $_SESSION['totalCost'];
$nameChildOneFirst =$_SESSION['nameChildOneFirst'];
$nameChildOneLast = $_SESSION['nameChildOneLast'];
$yearOne = $_SESSION['yearOne'];
$monthOne = $_SESSION['monthOne'];
$dayOne = $_SESSION['dayOne'];
$allergyOne = $_SESSION['allergiesOne'];
$specifyOne = $_SESSION['allergyTextOne'];
$assistantOne = $_SESSION['assistantOne'];
$genderOne = $_SESSION['genderOne'];
$gradeOne = $_SESSION['gradeOne'];

$stmt = $conn->prepare("INSERT INTO attendee (ParentFirst, ParentLast, Phone, Street, Postal, City, Province, Country, Email, ChildNameFirst, ChildNameLast, Year, Month, Day, Allergy, Specify, Assistant, Gender, Grade) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");



if (isset($_SESSION["nameChildOneFirst"]) && !empty($_SESSION["nameChildOneFirst"])) {

$stmt->bind_param("sssssssssssssssssss", $parentFirst, $parentLast, $phone, $street, $postal, $city, $province, $country, $email, $nameChildOneFirst, $nameChildOneLast, $yearOne, $monthOne, $dayOne, $allergyOne, $specifyOne, $assistantOne, $genderOne, $gradeOne);

$stmt->execute();
}

//child two
if (isset($_SESSION["nameChildTwoFirst"]) && !empty($_SESSION["nameChildTwoFirst"])) {
	$nameChildTwoFirst = $_SESSION['nameChildTwoFirst'];
	$nameChildTwoLast = $_SESSION['nameChildTwoLast'];
	$yearTwo = $_SESSION['yearTwo'];
	$monthTwo = $_SESSION['monthTwo'];
	$dayTwo = $_SESSION['dayTwo'];
	$allergyTwo = $_SESSION['allergiesTwo'];
	$specifyTwo = $_SESSION['allergyTextTwo'];
	$assistantTwo = $_SESSION['assistantTwo'];
	$genderTwo = $_SESSION['genderTwo'];
	$gradeTwo = $_SESSION['gradeTwo'];

$stmt->bind_param("sssssssssssssssssss", $parentFirst, $parentLast, $phone, $street, $postal, $city, $province, $country, $email, $nameChildTwoFirst, $nameChildTwoLast, $yearTwo, $monthTwo, $dayTwo, $allergyTwo, $specifyTwo, $assistantTwo, $genderTwo, $gradeTwo);

$stmt->execute();
}

//child three
if (isset($_SESSION["nameChildThreeFirst"]) && !empty($_SESSION["nameChildThreeFirst"])) {
	$nameChildThreeFirst =$_SESSION['nameChildThreeFirst'];
	$nameChildThreeLast = $_SESSION['nameChildThreeLast'];
	$yearThree = $_SESSION['yearThree'];
	$monthThree = $_SESSION['monthThree'];
	$dayThree = $_SESSION['dayThree'];
	$allergyThree = $_SESSION['allergiesThree'];
	$specifyThree = $_SESSION['allergyTextThree'];
	$assistantThree = $_SESSION['assistantThree'];
	$genderThree = $_SESSION['genderThree'];
	$gradeThree = $_SESSION['gradeThree'];
	
	$stmt->bind_param("sssssssssssssssssss", $parentFirst, $parentLast, $phone, $street, $postal, $city, $province, $country, $email, $nameChildThreeFirst, $nameChildThreeLast, $yearThree, $monthThree, $dayThree, $allergyThree, $specifyThree, $assistantThree, $genderThree, $gradeThree);

$stmt->execute();
}

//child four
if (isset($_SESSION["nameChildFourFirst"]) && !empty($_SESSION["nameChildFourFirst"])) {
	$nameChildFourFirst =$_SESSION['nameChildFourFirst'];
	$nameChildFourLast = $_SESSION['nameChildFourLast'];
	$yearFour = $_SESSION['yearFour'];
	$monthFour = $_SESSION['monthFour'];
	$dayFour = $_SESSION['dayFour'];
	$allergyFour = $_SESSION['allergiesFour'];
	$specifyFour = $_SESSION['allergyTextFour'];
	$assistantFour = $_SESSION['assistantFour'];
	$genderFour = $_SESSION['genderFour'];
	$gradeFour = $_SESSION['gradeFour'];
	
	$stmt->bind_param("sssssssssssssssssss", $parentFirst, $parentLast, $phone, $street, $postal, $city, $province, $country, $email, $nameChildFourFirst, $nameChildFourLast, $yearFour, $monthFour, $dayFour, $allergyFour, $specifyFour, $assistantFour, $genderFour, $gradeFour);

$stmt->execute();
}

//child five
if (isset($_SESSION["nameChildFiveFirst"]) && !empty($_SESSION["nameChildFiveFirst"])) {
	$nameChildFiveFirst =$_SESSION['nameChildFiveFirst'];
	$nameChildFiveLast = $_SESSION['nameChildFiveLast'];
	$yearFive = $_SESSION['yearFive'];
	$monthFive = $_SESSION['monthFive'];
	$dayFive = $_SESSION['dayFive'];
	$allergyFive = $_SESSION['allergiesFive'];
	$specifyFive = $_SESSION['allergyTextFive'];
	$assistantFive = $_SESSION['assistantFive'];
	$genderFive = $_SESSION['genderFive'];
	$gradeFive = $_SESSION['gradeFive'];
	
	$stmt->bind_param("sssssssssssssssssss", $parentFirst, $parentLast, $phone, $street, $postal, $city, $province, $country, $email, $nameChildFiveFirst, $nameChildFiveLast, $yearFive, $monthFive, $dayFive, $allergyFive, $specifyFive, $assistantFive, $genderFive, $gradeFive);

$stmt->execute();
}

$stmt->close();
$conn->close();


$nameParent = htmlspecialchars($_SESSION['nameParentFirst']);
$nameOne = htmlspecialchars($_SESSION['nameChildOneFirst']). " ". htmlspecialchars($_SESSION['nameChildOneLast']);

if (isset($_SESSION["nameChildTwoFirst"]) && !empty($_SESSION["nameChildTwoFirst"])) {
  $nameTwo = htmlspecialchars($_SESSION['nameChildTwoFirst']). " ". htmlspecialchars($_SESSION['nameChildTwoLast']);
}else {
  $nameTwo = "";
}

if (isset($_SESSION["nameChildThreeFirst"]) && !empty($_SESSION["nameChildThreeFirst"])) {
  $nameThree = htmlspecialchars($_SESSION['nameChildThreeFirst']). " ". htmlspecialchars($_SESSION['nameChildThreeLast']);
}else {
  $nameThree = "";
}

if (isset($_SESSION["nameChildFourFirst"]) && !empty($_SESSION["nameChildFourFirst"])) {
  $nameFour = htmlspecialchars($_SESSION['nameChildFourFirst']). " ". htmlspecialchars($_SESSION['nameChildFourLast']);
}else {
  $nameFour = "";
}

if (isset($_SESSION["nameChildFiveFirst"]) && !empty($_SESSION["nameChildFiveFirst"])) {
  $nameFive = htmlspecialchars($_SESSION['nameChildFiveFirst']). " ". htmlspecialchars($_SESSION['nameChildFiveLast']);
}else {
  $nameFive = "";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Complete</title>
  <link rel="stylesheet" href="css/stylesubmit.css">

</head>
<body>
	<div class="main" id="main">
	<h2 id="done">Registration Complete</h2>

 	<br>


	<div class="text">
		<p class="linebreak">Hi <?php echo $nameParent; ?>,</p>

		<p>Thank you for registering your child(ren) for the Boreal Summer Camp 2018! </p>
		
		<p class="linebreak">You have just registered:</p>
		
		<p><?php echo $nameOne; ?></p>
		<p><?php echo $nameTwo; ?></p>
		<p><?php echo $nameThree; ?></p>
		<p><?php echo $nameFour; ?></p>
		<p class="linebreak"><?php echo $nameFive; ?></p>
		

		<p>The total amount due is $<?php echo $_SESSION['totalCost']; ?> CAD, which is due on or before July 22nd, 2018 in cash or check, payable to HSA-UWC.</p>

		<p>For any questions please contact KY at <a href="">example@gmail.com</a></p>

		<p>Please print this page out for your records.</p>
	</div>

  </div>
  <br><br>

    <div class="button"><button id="printbtn">Print</button><a class="likeabutton" href="https://www.google.ca/">Back to Homepage</a></div>
    

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/printThis.js"></script>



    <script>
    	$('#closebtn').click(function(){
    		window.top.close();
    	});

    	$('#printbtn').click(function(){
    		$('.main').printThis({
    			debug: false,               // show the iframe for debugging
       			importCSS: true,            // import page CSS
		        importStyle: false,         // import style tags
		        printContainer: true,       // grab outer container as well as the contents of the selector
		        loadCSS: "css/stylepreview.css",  // path to additional css file - us an array [] for multiple
		        pageTitle: "Print",              // add title to print page
		        removeInline: false,        // remove all inline styles from print elements
		        printDelay: 333,            // variable print delay
		        header: null,               // prefix to html
		        footer: null,               // postfix to html
		        base: false,                // preserve the BASE tag, or accept a string for the URL
		        formValues: true,           // preserve input/form values
		        canvas: false,              // copy canvas elements (experimental)
       			doctypeString: '...',       // enter a different doctype for older markup
       			removeScripts: false,       // remove script tags from print content
       			copyTagClasses: false       // copy classes from the html & body tag
    		});
    	});
    </script>

</body>
</html>

<?php session_destroy() ?>
