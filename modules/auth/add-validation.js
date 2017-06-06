/* Validation rules for adding a new user to the authentication database */
/* Last updated by Ryan Hayes on 6/5/2017 */


// Checks that both passwords match to ensure the user is supplying the
// password that they know to be correct
function checkPasswords() {
	// Input fields
	var pwdOne = document.getElementById('pwdOrig').value;
	var pwdTwo = document.getElementById('pwdConf').value;
	// Instant validation messages
	var match = document.getElementById('pwdMatch');
	var noMatch = document.getElementById('pwdNoMatch');
	// Conditions
	if (pwdOne === pwdTwo) {
		match.style.display = 'inline';
		noMatch.style.display = 'none';
	}
	else {
		match.style.display = 'none';
		noMatch.style.display = 'inline';
	}
}

// Checks if the username provided already exists in the database; displays
// an alert message to prevent duplicates
function checkUsernameDuplicates() {
	var username = document.getElementById('uid').value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("userExists").innerHTML =
			this.responseText;
		}
	};
	xhttp.open("GET", "checkUsername.php?uname=" + username, true);
	xhttp.send();
}

// Checks the length of the username entered and displays an alert message
// if it is too short in length (< 6 characters long)
function checkUsernameLength() {
	var username = document.getElementById('uid').value;
	var badText = document.getElementById('userTooShort');
	if (username.length < 6) {
		badText.style.display = "inline";
	}
	else {
		badText.style.display = "none";
	}
}

// Enables submission of the add new user form to the database once all of
// the validation rules have been met
function finalCheck() {
	// Get the span alert messages
	var alertOne = document.getElementById('userTooShort');
	var alertTwo = document.getElementById('userExists');
	var alertThree = document.getElementById('pwdNoMatch');
	// Get the submit button
	var btnSubmit = document.getElementById('btnSub');
	// Get the form inputs
	var username = document.getElementById('uid').value;
	var pwdOne = document.getElementById('pwdOrig').value;
	var pwdTwo = document.getElementById('pwdConf').value;
	// Make sure the following:
	// - No validation alerts are showing
	// - The username is >= 6 characters
	// - The passwords are equal to each other
	// - The passwords aren't empty
	if (alertOne.style.display === "none" && alertTwo.innerHTML === "" && 
		alertThree.style.display === "none" && username.length >= 6 && 
		pwdOne === pwdTwo && pwdOne !== "") {
		btnSubmit.disabled = false;
	}
	else {
		btnSubmit.disabled = true;
	}
}