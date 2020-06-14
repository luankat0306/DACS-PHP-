
<?php
    header("Content-type: text/css; charset: UTF-8");
?>
 * {
  box-sizing: border-box;
  outline:none;
 
 }

 
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: whitesmoke;
}
/* Style the horizontal ruler */
hr {
    border: 1px solid #ccc;
    margin-bottom: 20px;
  }
/*header*/
.headerimg {
  background-color: #eb0000;
  text-align: left;
  padding: auto;
  margin: auto;
}
h1 {
  color:#ffd98d;
  text-align:center;
  display:inline;
  margin-left:30%;
}
/* Add padding to containers */
.container {
  padding: 10px ;
}
.boxlogin {
  background-color:#7FCDCD;
  margin:auto;
  padding: 80px 30px 0px 30px;
  border: 2px solid #888;
  width: 60%;
  border-radius: 20px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.7);
}
.box {
  background-color:white;
  margin:auto;
  padding:10px;
  border: 2px solid #888;
  width: 80%;
  border-radius: 12px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.7);
  
}

#nav-link {
  font-size:large;
  padding-left:15px
  position:absolute;
}
  .navsearch {
  width: 200px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 50px;
  font-size: 16px;

  background-image: url('https://img.icons8.com/metro/26/000000/search.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

.navsearch:focus {
  width: 400px;
}