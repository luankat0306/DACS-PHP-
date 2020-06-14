<?php
    header("Content-type: text/css; charset: UTF-8");
?>
  /* Full-width inputs */
  input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display:flex;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 12px;
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
/* radio container */
.radiocontainer {
  display: block;
  position: relative;
  padding-left: 30px;
  margin-bottom: 15px;
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
.signupnoti {
  width: auto;
  padding: 10px 18px;
  background-color: #4CAF50;
  float: center;
  border-radius: 12px;
  opacity: 0.8;
}
button:hover {
  opacity: 1;
}