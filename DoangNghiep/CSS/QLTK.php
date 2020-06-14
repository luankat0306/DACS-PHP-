<?php
    header("Content-type: text/css; charset: UTF-8");
?>
*{
  list-style: none;
  box-sizing: border-box;
  font-size: 15px;
}
hr {
    border: 1px solid lightgray;
    margin-bottom: 25px;
  }
.h2 {
    overflow: hidden;
    font-weight: 700;
    font-size: 18px;
    color:#e74a43 ;
    border-left: 8px solid #e74a43;
    padding: 0 10px;
    line-height: 40px;
    margin-bottom: 10px;
    padding-right: 0;
    position: relative;
    margin-top: 10px;
}
.otherh{
    overflow: hidden;
    font-weight: 700;
    font-size: 20px;
    color: black ;
    position: relative;
  
  }
  .wrapper{
    top: 80%;
    left: 50%;
    margin: auto;
    width: 70%;
    display: flex;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.9);
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
    border-top-right-radius: 30px;
    border-bottom-right-radius: 30px;

  }
  
  .wrapper .left{
    width: 25%;
    background: linear-gradient(to right,#ffd98d,#e74a43);
    padding: 30px 25px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    text-align: center;
    color: #fff;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
    
  }
  .wrapper .left .imgAva {
    margin-bottom: 10px;
    padding: 5px;
    box-shadow: 0px 8px 16px 0px rgba(73, 57, 57, 0.7);
    border-radius: 12px;
    width: 227px;
    height: 227px;
    display: flex;
    align-items: center;
    background: white;
  }
  
  .wrapper .left h4{
    margin-bottom: 10px;
  }
  
  .wrapper .left p{
    font-size: 12px;
  }
  
  .wrapper .right{
    width: 75%;
    background: #fff;
    padding: 30px 25px;
    border-top-right-radius: 30px;
    border-bottom-right-radius: 30px;
  }
  
  .wrapper .right .info,
  .wrapper .right .personalinfo{
    
    margin-bottom: 25px;
  }
  
  .wrapper .right .info h3,
  .wrapper .right .personalinfo h3{
      margin-bottom: 15px;
      padding-bottom: 5px;
      border-bottom: 1px solid #e0e0e0;
      color: #353c4e;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-size:x-large;
  }
  
  .wrapper .right .info_data,
  .wrapper .right .personalinfo_data{
    display: flex;
    justify-content: space-between;
  }
  
  .wrapper .right .info_data .data,
  .wrapper .right .personalinfo_data .data{
    width: 45%;
  }
  
  .wrapper .right .info_data .data h4,
  .wrapper .right .personalinfo_data .data h4{
      color: #353c4e;
      margin-bottom: 5px;
      font-size:large;
  }
  
  .wrapper .right .info_data .data p,
  .wrapper .right .personalinfo_data p{
    margin-bottom: 10px;
    color: #919aa3;
  }
  
  .wrapper .social_media ul{
    display: inline-flex;
  }
  
  .wrapper .social_media ul li{
    width: 50px;
    height: 50px;
    margin-right: 40px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 6px 6px 0.5px rgba(73, 57, 57, 0.7);
    opacity: 0.8;
  }
  .wrapper .social_media :hover{
    opacity: 1;
  }
  
  .wrapper .social_media ul li a{
    color: whitesmoke;
    display: flex;
    font-size: 30px;
    border-radius: 12px;
    height: 100%;
    align-items: center;
    justify-content: center;
    text-decoration: none;
  }
  #id01 {
    background-color:#4267B2;
  }
  #id02 {
    background: linear-gradient(to bottom right,#405DE6, #5851DB,#833AB4,#C13584,#E1306C,#FD1D1D,#F56040,#F77737,#FCAF45,#FFDC80);
  }
/* password change icon */
.pswchangeimg {
  float: right;
  width: 7%;
}
/* profile edit icon */
.editimg {
  float: right;
  width: 7%;
}
/* avatar change icon */
.avatarimg {
  float: right;
  width: 7%;
}

/* Full-width inputs */
input[type=text], input[type=password], input[type=place], input[type=email], input[type=tel], input[type=date], input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display:flex;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 12px;
}
/* avatar upload */
input[type=file] {
  display: inline-block;
  width: 100%;
  padding: 120px 0 0 0;
  height: 100px;
  overflow: hidden;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background: url('https://cdn1.iconfinder.com/data/icons/hawcons/32/698394-icon-130-cloud-upload-512.png') center center no-repeat #e4e4e4;
  border-radius: 20px;
  background-size: 60px 60px;
  box-shadow: 0px 8px 16px 0px rgba(73, 57, 57, 0.7);
}
input[type=file]:hover {
  border: 3px solid #157efb;
}
.place {
  width: 100%;
  margin: 8px 0;
  display:flex;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 12px;
}
.gender {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display:flex;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 12px;
  background-color: white
}
/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=tel]:focus, input[type=date]:focus {
  background-color: #ddd;
  outline: none;
}
/* Input Icon */
.input-container {
  display: -ms-flexbox;
  display:flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 20px 0;
  background: #e74a43;
  color: #f2c40f;
  min-width: 30px;
  text-align: center;
 border-radius: 12px;
 font-size: x-large;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid #f2c40f;
}
button {
  background-color: #f2c40f;
  color: white;
  padding: 14px 20px;
  margin: 5px 0px;
  border: none;
  outline: none;
  cursor: pointer;
  width: 100%;
  border-radius: 12px;
  opacity: 0.8;
}


/* Add a hover effect for buttons */
button:hover {
  opacity: 1;
}
.pswchangebtn {
  background-color: #4CAF50;
  color: white;
  padding: 5px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  border-radius: 12px;
  opacity: 0.8;
  font-size: medium;
  float:right;

}
.infoeditbtn {
  background-color: #4CAF50;
  color: white;
  padding: 5px;
  border: none;
  cursor: pointer;
  width: 10%;
  border-radius: 12px;
  opacity: 0.8;
  font-size: large;

}
.avatarbtn {
  background-color: #4CAF50;
  font-size:small;
  color: white;
  padding: 5px;
  margin: 0px 20px;
  border: none;
  cursor: pointer;
  width: 60%;
  border-radius: 12px;
  opacity: 0.8;
}
.logoutbtn {
  background-color: #e74a43;
  font-size:small;
  color: white;
  padding: 5px;
  transform: translate(0px,20px);
  border: none;
  cursor: pointer;
  width: 60%;
  border-radius: 12px;
  opacity: 0.8;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #e74a43;
  border-radius: 12px;
  width: 50%;
}
.confirmbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #4CAF50;
  float: right;
  border-radius: 12px;
  width: 50%;
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

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
/* edit img */
.signup {
  float: right;
  width: 10%;
}

/* Change styles for cancel button and edit button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
/* gender checkbox */

.radiocontainer {
  display: flex;
  position: relative;
  padding-left: 30px;
  margin-left: 15px;
  cursor: pointer;
  font-size: 16px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.radiocontainer input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: lightgray;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.radiocontainer:hover input ~ .checkmark {
  background-color: darkgray;
}

/* When the radio button is checked, add a reed background */
.radiocontainer input:checked ~ .checkmark {
  background-color: #f44336;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.radiocontainer input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.radiocontainer .checkmark:after {
 	top: 5px;
	left: 5px;
	width: 10px;
	height: 10px;
	border-radius: 50%;
	background: #ffd98d;
}