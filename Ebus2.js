// SELECTING ALL TEXT ELEMENTS
var username = document.forms['vform']['username'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
// validation function
function Validate() {
  // validate username
  if (username.value == "") {
    username.style.border = "1px solid #29B6F6";
    document.getElementById('username_div').style.color = "#29B6F6";
    name_error.textContent = "Username is required";
    username.focus();
    return false;
  }
  // validate username
  if (username.value.length < 3) {
    username.style.border = "1px solid #29B6F6";
    document.getElementById('username_div').style.color = "#29B6F6";
    name_error.textContent = "Username must be at least 3 characters";
    username.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid #29B6F6";
    document.getElementById('email_div').style.color = "#29B6F6";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
  // validate password
  if (password.value == "") {
    password.style.border = "1px solid #29B6F6";
    document.getElementById('password_div').style.color = "#29B6F6";
    password_confirm.style.border = "1px solid #29B6F6";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  }
  // check if the two passwords match
  if (password.value != password_confirm.value) {
    password.style.border = "1px solid #29B6F6";
    document.getElementById('pass_confirm_div').style.color = "#29B6F6";
    password_confirm.style.border = "1px solid #29B6F6";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
}
// event handler functions
function nameVerify() {
  if (username.value != "") {
   username.style.border = "1px solid #4CAF50";
   document.getElementById('username_div').style.color = "#4CAF50";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
  	email.style.border = "1px solid #4CAF50";
  	document.getElementById('email_div').style.color = "#4CAF50";
  	email_error.innerHTML = "";
  	return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
  	password.style.border = "1px solid #4CAF50";
  	document.getElementById('pass_confirm_div').style.color = "#4CAF50";
  	document.getElementById('password_div').style.color = "#4CAF50";
  	password_error.innerHTML = "";
  	return true;
  }
  if (password.value === password_confirm.value) {
  	password.style.border = "1px solid #4CAF50";
  	document.getElementById('pass_confirm_div').style.color = "#4CAF50";
  	password_error.innerHTML = "";
  	return true;
  }
}
