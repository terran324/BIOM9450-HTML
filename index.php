<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Anti-zombie Symposium</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="./formVerification.js"></script>
</head>

<body>
	<header>
		<div class="logo-header">
			<a href="./index.php"><img src="./assets/zombieBanner.png"></a>
	    </div>
	    <div class="navbar">
            <ul>
                <li><a href="./program.html">Program</a></li>
                <li><a href="./contact.html">Contact Us</a></li>
                <li><a href="./standards.html">Codes and standards</a></li>
            </ul>
        </div>
	</header>
	<div class="abstract-call">
		Call for Abstracts!
	</div>
	<div class="intro-text">
	    <h2>Welcome to the official page of the emergency Australian Anti-Zombie Symposium (AAZS).</h2>
		<p>The AAZS 2014 Committee urges authors to submit abstracts for presentation within the topic of finding solutions to end or at least control the Zombie threat. Submissions are sought for symposia, oral and poster presentations and can be made via military helicopter or messenger pigeon to the safe zone, at <strong>UNSW, Sydney</strong>.</p>
		<p>Please note the deadline for abstract submission is <strong>9am 1st September 2014</strong> Australian Eastern Standard Time (AEST). This is three hours before our generals make the decision to launch the nukes as a final act of desperation.</p>
	</div>
	<div class="registration-form">
		<h2>RSVP for AAZS today!</h2>
		<form id="registrationForm" onSubmit="return validInfo()" method="POST" action="./registered.php">
    		<table class="form-table">
		        <tr>
		            <td>Given name:</td>
		            <td><input type="text" id="firstName" name="firstName" placeholder="Your First Name" onChange="validFirstName()"></td>
		            <td id="firstNameError"></td>
		        </tr>
		        <tr>
		            <td>Family name:</td>
		            <td><input type="text" id="lastName" name="lastName" placeholder="Your Family Name" onChange="validLastName()"></td>
		            <td id="lastNameError"></td>
		        </tr>
		        <tr>
		            <td>Date of Birth:</td>
		            <td><input type="text" id="dateOfBirth" name="dateOfBirth" placeholder="dd/mm/yyyy" onChange="validDOB()"></td>
		            <td id="dobError"></td>
		        </tr>
		        <tr>
		            <td>Email Address:</td>
		            <td><input type="text" id="emailAddress" name="emailAddress" placeholder="Your Email Address" onChange="validEmail()"></td>
		            <td id="emailError"></td>
		        </tr>
		        <tr>
		        	<td><input type="submit" id="submit" value="Register now!"/></td>
		        </tr>
		    </table>
    	</form>
	</div>
</body>
<hr>
<footer>
	<strong>Created by Nicholas Ho / z3422527</strong>
</footer>
</html>
