<?php
    header("Content-type: text/css; charset: UTF-8");
?>
* {
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    font-size: 15px;
}
body {
    background-color: rgba(245, 245, 245, 0.5);
}
.admin-wrapper {
    display: flex;
    height: 100%;
}
/*----------------------------1---Left Sidebar------------------------------------------------*/
.admin-wrapper .left-sidebar {
    flex: 2;
    height: 100%;
}
/*----------------------------Sidebar box logo-------------------------------------------------------------------------------------*/

.admin-wrapper .left-sidebar .admin {
    margin: 5px 5px 20px 5px;
    border-radius: 10px;
    width: 100%;
    height: 100px;
    background-color: #EB0000;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: grid;
    grid-template-columns: auto auto;
}
.admin-wrapper .left-sidebar .admin .img-Admin {
    margin: 15px;
    padding: 5px 20px;
    text-align: center;
}
.avatar {
    
    vertical-align: middle;
    width: 50px;
    height: 50px;
    border-radius: 50%;
   
}
.admin-wrapper .left-sidebar .admin .img-Admin a {
    color: #ffd98d;
    text-decoration: none;
    
}
.admin-wrapper .left-sidebar .admin .logo {
    margin: 10% 40%;
    width: 50%;
}

/*------------------------------Sidebar Items---------------------------------------------------------------------------------------*/
.admin-wrapper .left-sidebar ul {
    display: block;
    margin: 5px;
    padding: 0px;
    width: 100%;
    height: 600px; 
}

.admin-wrapper .left-sidebar ul li {
    padding-left: 0px;  
    margin-bottom: 10px;
    border-radius: 5px;
    background:  rgb(255, 255, 255);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    list-style: none;
}
.admin-wrapper .left-sidebar ul li a {
    color: rgb(27, 27, 27);
    padding: 10px;
    display: flex;
    line-height: 40px;
    font-size: 16px;
    list-style: none;
    text-decoration: none;
    text-transform: capitalize;
}
.admin-wrapper .left-sidebar ul li a .fas {
    padding: 11px 5px;
}
.admin-wrapper .left-sidebar ul li:hover:not(.active) {
    border-left: 8px solid #EB0000;
    box-shadow: 2px 4px 8px rgba(24, 24, 24, 0.5);
    transition: 0.1s;
}
.admin-wrapper .left-sidebar ul li:hover:not(.active)  a { 
    margin-left: 10px;
    transition: 0.2s; 
}
.admin-wrapper .left-sidebar ul .active {
    border-left: 8px solid  #EB0000;
}
.admin-wrapper .left-sidebar ul .active a {
    font-weight: bold;
}

/*----------------------------------------2---Content--------------------------------------------------------------- */
.admin-wrapper .content {
    margin: 10px 30px 0px 30px;
    padding-bottom: 30px;
    flex: 8;
    background:  none;
}

/*-----------------------------------------Thong ke--------------------------------------------------------------*/
.admin-wrapper .content .thongke {
    padding: 10px;
    display: grid;
    grid-template-columns: 20% 20% 20% 20%;
    gap: 40px;
    justify-content: center;
}
.admin-wrapper .content .thongke .grid-item {
    padding: 50px 10px;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    background: rgb(255, 255, 255);
    text-align: center;
}
.admin-wrapper .content .thongke .grid-item i {
    float: right;
    font-size: 40px;
    padding:  10px;
}
.admin-wrapper .content .thongke .grid-item label {
    font-size: 20px; 
    text-transform: uppercase;
}
.admin-wrapper .content .thongke .grid-item p {
    font-size: 20px;
    padding: 0px;  
    margin: 8px auto;
    text-shadow: 0 2px 8px 0 rgba(255, 255, 255, 0.2);
    pointer-events: none;
}
.admin-wrapper .content .thongke #dashboard-ung-vien {
    border-left: 10px solid rgba(45, 159, 229, 0.5);
    color: #2D9DE5;
    text-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
}
.admin-wrapper .content .thongke #dashboard-doanh-nghiep {
    border-left: 10px solid rgba(232, 98, 93, 0.5);
    color: #E8615D; 
    text-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
}
.admin-wrapper .content .thongke #dashboard-viec-lam {
    border-left: 10px solid rgba(244, 149, 54, 0.5);
    color: #F49436; 
    text-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
}
.admin-wrapper .content .thongke #dashboard-ung-tuyen {
    border-left: 10px solid #63479286;
    color: #634792; 
    text-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
}

/*--------------------------------Search----------------------------------------------------------------------------*/
.admin-wrapper .content .search form.form-search {
    position: absolute;
    background: white;
    height: 40px;
    border-radius: 40px;
    margin: 10px 250px 10px 25px;
    box-shadow: 2px 1px 5px rgba(0, 0, 0, 0.2);
}
.admin-wrapper .content .search form.form-search:hover > input.search-txt {
    width: 240px;
    padding: 0 6px;
}
.admin-wrapper .content .search form.form-search button.search-btn {
    color: #ffd98d;
    float: right;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: none;
    outline: none;
    background: #EB0000;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}
form.form-search::after {
    content: "";
    clear: both;
}
.admin-wrapper .content .search form.form-search input.search-txt {
    border: none;
    background: none;
    outline: none;
    float: left;
    padding: 0;
    color: black;
    font-size: 16px;
    line-height: 40px;
    transition: 0.4s;
    width: 0px;
}


/*-------------------------------------Form Add----------------------------------------------------------------*/
.admin-wrapper .content .add {
    margin: 80px 25px 30px 25px;
    border-radius: 10px;
    background: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.admin-wrapper .content .add .add-label {
    background: rgba(240, 240, 240, 0.5);
    border-bottom: 2px solid #EB0000;
    border-radius: 10px 10px 0 0;
    padding: 5px;
}
.admin-wrapper .content .add .add-label h1 {
    font-size: 17px;
    padding: 0px 5px;
    margin: 5px;
    text-transform: uppercase;
    font-weight: bold;
}

.admin-wrapper .content .add .form-add {
    display: grid;
    grid-template-columns: auto auto auto;
    margin: 5px;
}
#profileDisplay {
    display: block;
    vertical-align: middle;
    width: 100px;
    height: 100px;
    border-radius: 50%;
   margin: 10px auto;

}
.admin-wrapper .content .add .form-add .label-item { 
    display: block;
    padding: 5px;
    margin: 5px 18px;
    text-transform: uppercase;
}
.admin-wrapper .content .add .form-add .label-item input {
    border-radius: 0 0 5px 5px;
    background: none;
    outline: none;
    border: none;
    padding: 3px;
    margin: 5px 0px;
    border-bottom : 2px solid gray;
    font-weight: 500;
}
.admin-wrapper .content .add .button {
    display: flex;
    justify-content: center;
    align-content: center;
}
.admin-wrapper .content .add .button .submit-btn {
    width: auto;
    border-radius: 10px;
    border: none;
    outline: none;
    background: white;
    box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5);
    padding: 15px;
    margin: 0px;
    margin-bottom: 20px;
    justify-content: center;
    align-items: center;
    text-align: center;
    cursor: pointer;
    text-transform: uppercase;
    background: #EB0000;
    color: #ffd98d;
}
.admin-wrapper .content .add .button .submit-btn:hover {
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.5)
}

/*--------------------------------Show Data-------------------------------------------------------------*/
.admin-wrapper .content .show-data {
    margin: 20px;
    padding: 5px;
    height: 100vh;
}
.admin-wrapper .content .show-data table {
    margin: 0px;
    border-collapse: collapse;
    table-layout: auto;
    border-radius: 10px;
    width: 100%;
    overflow: hidden;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
}

.admin-wrapper .content .show-data table td, th {
    text-align: center;
    padding: 10px;
    border-right: 0.5px solid rgba(221, 221, 221, 0.5);  
    border-bottom: 1px solid #ddd; 
    font-weight: 300;
}
.admin-wrapper .content .show-data table td:nth-last-of-type(1), th:nth-last-of-type(1) {
    border-right: none;
}
.admin-wrapper .content .show-data table th {
    text-align: center;
    font-size: 17px;
    text-transform: uppercase;
    font-weight: bold;
}

.admin-wrapper .content .show-data table thead tr {
    background: #EB0000;
    color: #ffd98d;
    
}

.admin-wrapper .content .show-data table tbody tr {
    background: white;
    
}
.admin-wrapper .content .show-data table tbody tr:nth-of-type(even) {
    background-color: #fafafa;
}

.admin-wrapper .content .show-data table tbody .active-row {
    font-weight: bold;
    background: #EB0000;
    color: #ffd98d;
}


.admin-wrapper .content .show-data table tbody tr td .edit{
    padding: 0px 20px;
    text-decoration: none;
    color: green;
    font-size: 18px;
}
.admin-wrapper .content .show-data table tbody tr td .delete {
    padding: 0px 20px;
    text-decoration: none;
    color: red;
    font-size: 18px;
}
.admin-wrapper .content .show-data table tbody tr td .edit:hover {
    text-decoration: underline;
}
.admin-wrapper .content .show-data table tbody tr td .delete:hover {
    text-decoration: underline;
}


.admin-wrapper .content .button-group {
    display: flex;
    justify-content: center;
    align-content: center;
    margin: 20px;
    float: none;
}
.admin-wrapper .content .button-group .btn-post {
    background: white;
    padding: 10px 0px;
    margin: 0px 20px;
    color: black;
    border-radius: 5px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    
}
.admin-wrapper .content .button-group a {
    padding: 10px;
    color: black;
    list-style: none;
    text-decoration: none;
    text-transform: uppercase;
}
.admin-wrapper .content .button-group .active {
    border-left: 5px solid #EB0000;
    border-right: 5px solid #EB0000;
}


.admin-wrapper .content .post-content {
    background: white;
    border-radius: 10px;
    padding: 10px;
    margin: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}
.admin-wrapper .content .post-content form .post-title label {
    text-transform: uppercase;
}
.admin-wrapper .content .post-content form .post-title input {
    border: none;
    border: 0.5px solid gray;
    border-radius: 10px;
    margin: 10px 0px;
    padding: 10px;
    outline: none;
}
.admin-wrapper .content .button-group .btn-save {
    background: white;
    border: 1px solid rgba(0, 0, 0, 0.2);
    background: #EB0000;
    color: #ffd98d;
    border-radius: 10px;
    padding: 15px 30px;
}
.admin-wrapper .content .button-group .btn-save:hover {
    cursor: pointer;
    outline: none;
   
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.2);
    transition: 0.1s;
}