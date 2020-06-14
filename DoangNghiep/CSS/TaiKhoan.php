<?php
    header("Content-type: text/css; charset: UTF-8");
?>
* {
  outline:none;
}
.form-background {
  padding:14px 16px;
  background-color:whitesmoke;
  border-radius:20px;
}

/* Full-width inputs */
input[type=text], input[type=password], input[type=place], input[type=email], input[type=tel]  {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display:flex;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 12px;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=tel]:focus {
  background-color: #ddd;
}
/* Input Icon */
.input-container {
  display: -ms-flexbox;
  display:flex;
  width: 100%;
  margin-bottom: 15px;
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
  padding: 10px 18px;
  background-color: #e74a43;
  float:left;
  border-radius: 12px;
}
/* Extra style for the sign up button (green) */
.signupbtn1 {
  width: auto;
  padding: 10px 18px;
  background-color: #4CAF50;
  float: right;
  border-radius: 12px;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* login image */
.imglogin {
  width: 13%;
  border-radius: 50%;
}


/* Style the horizontal ruler */
hr {
  border: 1px solid lightgray;
  margin-bottom: 25px;
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


