<?php
    header("Content-type: text/css; charset: UTF-8");
?>
* {
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  font-size: 15px;
  box-sizing: border-box;
}
body{
  font-size: 1.6rem;
  margin: 0;
  height: 100vh;
  
}



header {
  display: flex;
  margin: 0px;
  padding: 0px;
  height: 60px;
  background-color:  #EB0000;
}
/*-------------Logo-----------------------------*/
header .logo {
  margin: 0px 10px;
  width: 7%;
}




/* 
=====
MENU STYLES
=====
*/
.menu:hover .menu__link:not(:hover){
  color: rgb(136, 0, 0);
}

.menu {
  height: 100%;
}
/* core styles */

.menu__list{
  
  display: flex;  
  text-align: center;
  padding-left: 0;
  margin-top: 0;
  margin-bottom: 0;
  list-style: none;  
  
}

.menu__group{
  flex-grow: 1;
}

.menu__link{
  display: block;
}
.menu__link i {
  padding: 0px 5px;
  font-size: 15px;
}

/* skin */

.menu{
  background-color: #EB0000;
}

.menu__link{
  padding: 2rem 1.5rem;

  font-weight: 700;
  color: #ffd98d;
  text-decoration: none;
  text-transform: uppercase;
}

/* hover animation */

.menu__link{
  position: relative;
  overflow: hidden;

  will-change: color;
  transition: color .25s ease-out;  
}

.menu__link::before, 
.menu__link::after {
  content: "";
  width: 0;
  height: 3px;
  background-color: #ffd98d;

  will-change: width;
  transition: width .1s ease-out;

  position: absolute;
  bottom: 0;
}

.menu__link::before{
  left: 50%;
  transform: translateX(-50%); 
}

.menu__link::after{
  right: 50%;
  transform: translateX(50%); 
}

.menu__link:hover::before, 
.menu__link:hover::after{
  width: 100%;
  transition-duration: .2s;
}
.page{
  max-width: 640px;
  width: 100%;  
  padding-left: 1rem;
  padding-right: 1rem;
  
  order: 1;
  margin: auto;
}

/*
    ==
  Button
    ==  
  */
.button-NTD {
  margin: 5px 15px;
  border-radius: 10px;
  background-color: #ffd98d;
  line-height: 50px;
  order: 2;
  box-shadow: 0px 0px 5px rgb(0, 0, 0, 0.2);
}
.button-NTD  a{
  font-size: 17px;
  font-weight: 700;
  padding: 10px;
  color: #EB0000;
  text-decoration: none;
  text-align: center;
}
.button-NTD:hover {
  background: rgb(255, 211, 122);
  box-shadow: 2px 0px 8px rgb(0, 0, 0, 0.5);
  cursor: pointer;
}
/*--------------------------------------Main---------------------------------------*/


/*
      ====
    slideshow  
      ====
*/

.mySlides {display: none;}

.mySlides img {
  vertical-align: middle;
  border-radius: 10px;
  max-height: 650px;
  box-shadow: 2px 3px 5px rgb(0, 0, 0, 0.5);
}

/* Slideshow container */
.slideshow-container {
  position: relative;
  margin: 20px;
  border-radius: 10px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

/*
    ==
  Search
    ==
*/
.box-searrch {
  display: block;
  width: 100%;
  position: absolute;
  transform: translate(0%, -350px);
}
.box-searrch h1 {
  padding-bottom: 10px;
  color: whitesmoke;
  text-shadow: 2px 4px 5px rgb(0, 0, 0, 0.2);
  font-weight: 700;
  font-size: 40px;
  margin: 0px 25%;
}
.box-searrch .background-search {
  display: block;
  border-radius: 10px;
  background: rgb(0, 0, 0, 0.6);
  padding: 15px;
  margin: 0px 25%;
}
.box-searrch .background-search input {
  width: 80%;
  padding: 10px;
  margin: 0px;
  border-radius: 5px;
  outline: none;
  border: none;
  box-shadow: 0px 0px 8px rgb(0, 0, 0, 0.2);
}
.box-searrch .background-search button {
  float: right;
  width: 19%;
  padding: 10px 0px;
  background: rgba(235, 0, 0, 0.9);
  border: none;
  cursor: pointer;
  border-radius: 5px;
  box-shadow: 0px 0px 8px rgb(0, 0, 0, 0.2);
  color: #ffd98d;
  font-weight: 700;
}
.box-searrch .background-search button:hover {
  box-shadow: 2px 2px 8px rgb(0, 0, 0, 0.5);
  background: #EB0000;
  
}
.box-searrch .background-search button i {
  padding: 0px 3px;
}
/*
        ====
    Top Company
        ====
*/
.top-company {
  width: 100%;
  text-align: center;
}
.top-company h1 {
  margin-top: 30px;
  font-size: 25px;
  font-weight: 500;
}
.top-company .company {
  width: 100%;
  display: grid;
  grid-template-columns: 25% 25% 25% 25%;
  padding: auto;
}
.top-company .company .box-logo {
  margin: 10% 25%;
  border-radius: 10px;
  box-shadow: 2px 2px 5px rgb(0, 0, 0, 0.5);
  width: 50%;
  height: 150px;
  padding: 10%;
  overflow: auto;
  display: flex;
  align-items: center;
  background: white;
}
.top-company .company .box-logo:hover {
  cursor: pointer;
  box-shadow: 2px 4px 8px rgb(0, 0, 0, 0.5);
  background: rgb(253, 253, 253);
}
.top-company .company .box-logo img {
  display: block;
}



/*--------------------------------------Footer---------------------------------------*/
footer {
  padding: 5px;
  background: rgb(223, 223, 223);
  color: black;
  
  display: grid;
  grid-template-columns: auto auto auto auto;

}
footer ul {
  font-weight: 600;
}

footer ul li {
  list-style: none;
  padding: 10px 0px;
}
footer ul li a {
  color: black;
  text-decoration: none;
}

@media (min-width: 768px){

  html{
    font-size: 62.5%;
  }
}

@media (max-width: 767px){

  html{
    font-size: 50%;
  }
}