<?php
    header("Content-type: text/css; charset: UTF-8");
?>
* {
  outline:none;
}
.form-background {
  padding:20px;
  background-color:#6F9FD8;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
  border-top: 3px solid whitesmoke;
  border-left: 3px solid whitesmoke;
  border-right: 3px solid whitesmoke;
}
h2 {
  font-size:x-large;
  text-align:center;
  color:whitesmoke;
}

/* Full-width inputs */
input[type=text], input[type=password], input[type=email], input[type=tel]  {
  width: 100%;
  padding: 10px 15px;
  margin: 5px 0;
  display:flex;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 12px;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=tel]:focus {
  background-color: #ddd;
}


/* Set a style for all buttons */
button {
  background-color: #f2c40f;
  color: white;
  padding: 14px 20px;
  margin: 5px 0px;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 12px;
  opacity: 0.8;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 1;
}

/* Extra style for the cancel button (red) */
.cancelbtn1 {
  width: auto;
  background-color: #e74a43;
  float:left;
  border-radius: 12px;
}
/* Extra style for the sign up button (green) */
.signupbtn1 {
  width: auto;
  background-color: #4CAF50;
  float: right;
  border-radius: 12px;
}

/* Center the avatar image inside this container */
.imgcontainer {
  position: relative;
  height: 170px;
	width: 170px;
	top: -100px;
  left: 40%;
	border-radius: 50%;
	background: #7FCDCD;
	padding: 10px;
	text-align: center;
}

img.avatar {
  height: 150px;
	width: 150px;
	border-radius: 50%;
	border: 3px solid whitesmoke;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
/* Signup img */
.signup {
  float: right;
  width: 10%;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}


