<?php
    header("Content-type: text/css; charset: UTF-8");
?>
body {
    font-family: Arial, Helvetica, sans-serif;
    justify-content: center;
    align-items: center;
    display: flex;
    height: 100vh;
    background-image: url("../image/imgBackground.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.input-group {
    position: relative;
    margin-bottom: 40px;
}
.formLogin {
    width: 400px;
}
form {
    background: rgba(255, 255, 255, 0.9);
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0.2px 5px 10px rgba(0, 0, 0, 0.2);
    text-shadow: 0.2px 0.5px 3px rgba(0, 0, 0, 0.2);
}
form h2 {
    text-align: center;
    user-select: none; 
    margin-bottom: 30px; 
    color: #de5246;
}
form input {
    background: none;
    border: none;
    border-bottom: 1px solid rgba(255, 0, 0, 0.5);
    outline: none;
    padding: 6px 4px;
    display: block;
    margin: 10px auto;
}
form label {
    position: absolute;
    left: 25%;
    top: 30%;
    font-weight: 500;
    font-size: 15px;
    color: rgb(255, 94, 94);
    pointer-events: none;
}
input:focus + label, input:valid + label {
    top: -20%;
    left: 24%;
    color: #de5246;
    font-size: 17px;
    transition: 0.2s;
}
form button {
    color: white;
    border: none;
    outline: none;
    background:#de5246;
    border-radius: 20px;
    padding: 10px;
    width: 50%;
    display: block;
    margin: 50px auto;
    cursor: pointer;
}
form button:hover {
    box-shadow: 0.2px 2px 10px rgba(0, 0, 0, 0.2);
    text-shadow: 0.2px 2px 10px rgba(0, 0, 0, 0.2);
    transition: 0.2s;
}