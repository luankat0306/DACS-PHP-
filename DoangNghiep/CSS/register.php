<?php
    header("Content-type: text/css; charset: UTF-8");
?>

.place {
  width: 100%;
  margin: 8px 0;
  display:flex;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 12px;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn2 {
  float: left;
  width: 50%;
  background-color: #e74a43;
}
.signupbtn2 {
  float: left;
  width: 50%;
  background-color: #4CAF50;
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
/* The Modal (background) */
.modal {
  display: none; 
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}


/* Modal ContentBox */
.modalbox {
  position: relative;
  background-color: whitesmoke;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
  border-radius: 30px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.5s;
  animation-name: animatetop;
  animation-duration: 0.5s
  animation-fill-mode: none;
  
  
}
/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
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
  width: 7%;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}


