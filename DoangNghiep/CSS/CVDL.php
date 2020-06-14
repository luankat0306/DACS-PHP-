<?php
    header("Content-type: text/css; charset: UTF-8");
?>
/* Style the horizontal ruler */
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
  .savedbox {
    background-color: white;
    margin: auto;
    padding: 0px 12px;
    border: 2px solid #888;
    width: 80%;
    border-radius: 12px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.7);
  }
  .boxcontent {
    font-size: 14px;

  }
  .jobaddbtn {
    background-color: #4CAF50;
    color: white;
    padding: 5px;
    margin: 0px 35%;
    border: none;
    cursor: pointer;
    width: 12%;
    border-radius: 12px;
    opacity: 0.8;
    font-size: large;
  }
  .jobaddbtn:hover {
    background-color: #22ab27;
  }
  /*--------------------------------Show Data-------------------------------------------------------------*/
 .show-data {
    margin: 20px;
    padding: 5px;
    height: 100vh;
}
 .show-data table {
    margin: 0px;
    border-collapse: collapse;
    table-layout: auto;
    border-radius: 10px;
    width: 100%;
    overflow: hidden;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
}

 .show-data table td, th {
    text-align: center;
    padding: 10px;
    border-right: 0.5px solid rgba(221, 221, 221, 0.5);  
    border-bottom: 1px solid #ddd; 
    font-weight: 300;
}
 .show-data table td:nth-last-of-type(1), th:nth-last-of-type(1) {
    border-right: none;
}
 .show-data table th {
    text-align: center;
    font-size: 17px;
    text-transform: uppercase;
    font-weight: bold;
}

 .show-data table thead tr {
    color: whitesmoke;
    background: linear-gradient(45deg, #48c6ef, #6f86d6);
    
}

 .show-data table tbody tr {
    background: white;
    
}
 .show-data table tbody tr:nth-of-type(even) {
    background-color: #fafafa;
}

 .show-data table tbody .active-row {
    font-weight: bold;
    background: #EB0000;
    color: #ffd98d;
}


 .show-data table tbody tr td .edit{
    padding: 0px 20px;
    text-decoration: none;
    color: green;
    font-size: 18px;
}