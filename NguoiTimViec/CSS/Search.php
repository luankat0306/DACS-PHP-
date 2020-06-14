<?php
    header("Content-type: text/css; charset: UTF-8");
?>
* {
  outline:none;
  font-size: 15px;
}

/* ------------------------- Search ------------------------- */

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
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

button:hover {
  opacity:1;
}

form.example:after {
  content: "";
  clear: both;
  display: table;
}
.searchbox {
  background-color: white;
  margin: 20px auto;
  padding: 12px;
  border: 2px solid #888;
  width: 80%;
  height:600px;
  border-radius: 12px;
  box-shadow: 3px 2px 5px rgba(0, 0, 0, 0.5);
  display:grid;
  grid-template-columns: 50% 50%;
  overflow-y: auto;
}
.infobox {
  background-color: white;
  margin: 20px auto;
  padding: 12px;
  border: 2px solid #888;
  width: 70%;
  border-radius: 12px;
  box-shadow: 3px 2px 5px rgba(0, 0, 0, 0.5);
  
  grid-gap: 10px;
}
.infobox form{
  display: grid;
  grid-template-areas: 
    'title title'
    'name name';
}
 a {
  color: black;
}
.infobox p span {
  font-size: 17px;
  text-decoration: underline;
}
.item-title {
  text-align: center;
  grid-area: title;
}
.item-name {
  text-align: center;
  grid-area: name;
}
.item-detail {
  grid-area: 6/ 1/ span 1 / span 2;
}

.content {
  display: grid;
  grid-template-areas: 
    'title title'
    'name name';
  border-right:2px solid lightgray;
  border-bottom:2px solid lightgray;
  border-bottom-right-radius: 12px;
  box-shadow: 3px 3px 5px rgba(0,0,0,0.5);
  padding: 20px;
  margin: 20px;
  height: 300px;
}
.content form {
  display: flex;
}
.btnContent {
    border-radius: 13px;
    margin: 15px auto;
    padding: 10px;
    border: none;
    outline: none;
    box-shadow: 0.2px 3px 3px rgba(0, 0, 0, 0.7);
    width: 100px;
}
.submit {
    background: #216583;
    color: whitesmoke;
    opacity:0.88;
}
.save {
    background: #f76262;
    color: whitesmoke;
    opacity:0.8;
}
.job-info-box {
  background: whitesmoke;
  margin: 20px auto;
  border: 2px solid #888;
  width: 70%;
  border-radius: 12px;
  box-shadow: 3px 2px 5px rgba(0, 0, 0, 0.5);
  grid-gap: 10px;
}
.job-info-box form {
  margin: 10px;
  display: grid;
  grid-template-areas:
        'title title'
        'name name';
}
.corp-info-box {
  background-color:whitesmoke;
  margin:auto;
  padding:10px;
  border: 2px solid #888;
  width: 70%;
  border-radius: 12px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.7);
  display:grid;
  grid-template-columns: 30% 70% ;
}

.corp-info-box img{
  display: block;
  
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
.imgcontainer{
  border-radius:12px;
  background:#009B77;
}
.imgCT {
    width: 200px;
    height: 200px;
    margin: 70px auto;
    display: flex;
    align-items: center;
    background: white;
    border-radius:12px;
    padding: 10px;
    overflow: auto;
    box-shadow: 9px 10px 4px rgba(73,53, 53, 0.8);
}
.corp-content{
  background-color:whitesmoke;
  margin-left:10px;
  padding:10px;
  border-left: 4px solid #ccc;
  width:100%;
  

}
.corp-content h2 {
  font-size:x-large;
  text-align:center;
  color:#009B77;
}
.corp-content ul li {
  list-style-type:none;
}
.corp-content i {
  color:#009B77;
  font-size:large;
}

p.info {
  padding-left:10px;
  display:inline-block;
  font-weight:bold;
}


/* ------------------------- Corp Search ------------------------- */

  
  .corp {
    float: left;
    width: 20%;
    height:40px;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
    opacity: 0.8;
  }
  
  
/* ------------------------- Occ Search ------------------------- */


.occ {
  float: left;
  width: 20%;
  height:40px;
  padding: 10px;
  background: #4CAF50;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
  opacity: 0.8;
}


/* ------------------------- Place Search ------------------------- */


.place {
  float: left;
  width: 20%;
  height:40px;
  padding: 10px;
  background: #e74a43;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
  opacity: 0.8;
}


/* ------------------------- Exp Search ------------------------- */

.exp {
  float: left;
  width: 20%;
  height:40px;
  padding: 10px;
  background: #ff751a;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
  opacity: 0.8;
}


/* ------------------------- Sal Search ------------------------- */


.sal {
  float: left;
  width: 20%;
  height:40px;
  padding: 10px;
  background: #f2c40f;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
  opacity: 0.8;
}

