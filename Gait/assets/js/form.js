function validateForm() { 
  var x = document.forms["registerform"]["name"].value; 
  var y = document.forms["registerform"]["email"].value;
  var myInput = document.getElementById("password");
  var lowerCaseLetters = /[a-z]/g;
  var upperCaseLetters = /[A-Z]/g;
  var numbers = /[0-9]/g;
  if (x == "") { 
    alert("Name must be filled out"); 
    return false; 
  };
  if (y == "") {
    alert("Email must be filled out"); 
    return false; 
  };
  if(!(myInput.value.length >= 8 && myInput.value.match(lowerCaseLetters) && myInput.value.match(upperCaseLetters) && myInput.value.match(numbers))) {
  alert("Password must be filled out");
  return false;
};

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
};

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
};

};